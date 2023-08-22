<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use App\Models\PaperType;
use App\Models\Deadline;
use App\Models\AcademicLevel;
use App\Models\Country;
use App\Models\Order;
use App\Models\RefrenceStyle;
use App\Models\Subject;
use App\Models\Fare;
use App\Models\File;
use App\Models\Invoice;
use App\Models\WebSetting;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public $password;


    public function __construct() {
        $this->password = Str::random(8);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFare(){
        $fares = Fare::all();
        return response()->json($fares);
    }
    public function create()
    {
        $paper_types = PaperType::orderBy('id', 'ASC')->get();
        $academic_levels = AcademicLevel::orderBy('id', 'ASC')->get();
        $deadlines = Deadline::orderBy('id', 'ASC')->get();
        $reference_styles = RefrenceStyle::orderBy('id', 'ASC')->get();
        $subjects = Subject::orderBy('id', 'ASC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();
        $web_setting = WebSetting::first();

        // $responce = json_encode($paper_types, $fares);

        return response()->json(['academic_levels'=> $academic_levels, 'deadlines'=> $deadlines,
        'paper_types' =>$paper_types ,
        'reference_styles' =>$reference_styles ,
        'subjects' =>$subjects ,
        'countries' =>$countries ,
        'web_setting' =>$web_setting 
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        if ($request->hasfile('emailAttachments')) {
            $fileSize = 0;
            $fileQty = 0;
            foreach ($request->file('emailAttachments') as $file) {
                $fileSize += $file->getSize();
                $fileQty = $fileQty + 1;
            }

            if ($fileQty > 10) {
                $request->session()->flash('message', 'file quantity exceeded the limit.');
                return redirect()->route('order');
            }

            if ($fileSize >  25000000) {
                $request->session()->flash('message', 'file size exceeded the limit.');
                return redirect()->route('order');
            }
        }


        $files = [];


        //Dynamic getting price from database according to deadline and Academic level
        $fare = Fare::where(['academic_level_id' => $request->academic_level, 'deadline_id' => $request->deadline])->firstOrFail();
        $request->merge([
            'cost_per_page' => $fare->per_page_price,
            "total_price" => ($fare->per_page_price * $request->number_of_pages),
            'academic_level' => $fare->academic_level->name,
            'deadline' => $fare->deadline->name,
        ]);
        // dd($request);
        // $password = Str::random(8);
        // $this->password = $password;

        DB::beginTransaction();
        // dd($request);
        $user = User::where(['email' => $request->email])->first();
        // dd($user);
        // flag to check user is created default false
        $flag = false;

        if (!$user) {

            $flag = true;

            $user = User::create(
                // ['email'    =>  request('email')],
                [
                    'name'      => request('name'),
                    'email'    =>  request('email'),
                    'phone'     => request('phone'),
                    'country'   => request('country'),
                    'password'  => Hash::make($this->password),
                ],
            );
            $user->roles()->sync(2);
            session()->flash('userData', ['userEmail' => 'Customer Account' . ' ' . $user->email . ' ' . 'created successfully check your email for login credentials', 'userId' => $user->id]);
        }




        $deadline_id =  Deadline::where('name', $request->deadline)->first();
        $request->merge(['user_id' => $user->id, 'package_id' => $request->package, 'deadline_id' => $deadline_id->id]);
        // $this->user_created = true;
        // dd($request);
        // dd($request);
        $order = Order::create(

            $request->all()
        );
        // return $order->subjectName;
        // dd($request->total_price);
        // Generating Invoice before order placing
        $invoice = Invoice::create([
            "ref_no"    => Str::uuid()->toString(),
            "amount"    => $request->total_price,
            "order_id"  => $order->id,
            "user_id"   => $user->id,
            "gateway"   => "stripe",
            "currency"  => "gbp",
        ]);


        if ($request->hasfile('emailAttachments')) {
            foreach ($request->file('emailAttachments') as $file) {
                $fileName = uniqid() . '_' . time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');

                array_push($files, $filePath);

                File::create([
                    "order_id" => $order->id,
                    "file_path" => $filePath
                ]);
            }
        }
        $data = [
            'user' => $user,
            'password' => $this->password,
            'files' => $files,
            'order' => $order,
            'flag' => $flag,
            'invoice' => $invoice,
        ];
        // Send mail to user
        // Mail::to($request->email)->send(new OrderMail($data));

        // dd($order);

        // // Send mail to admin
        // Mail::to(config('app.mail_address'))->send(new OrderAdminMail($request, $files, $order, $data));




        DB::commit();
        return response()->json( ['reference' => $invoice->ref_no]);
        // return redirect()->route('invoice', ['reference' => $invoice->ref_no]);
    }
    public function invoice(Request $request)
    {

        // dd($request);
        if ($request->query('reference')) {

            $invoice = Invoice::where(['ref_no' => $request->query('reference'), 'status_id' => 4])->with('order')->firstOrFail();
            $order   = Order::where(['id' => $invoice->order_id])->firstorFail();

            if (session('userData.userId') !=  $invoice->user_id) {
                session()->forget('userData');
            }

            return view('pages.invoice', compact('invoice', 'order'));
        }

        return redirect()->route('order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
