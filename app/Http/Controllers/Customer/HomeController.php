<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $orders = Order::with('invoice')->where('user_id', Auth::user()->id)->get('status_id');
        $invoices = Invoice::where('user_id', Auth::user()->id)->get('status_id');
        $latestOrders = Order::with('invoice')->where('user_id', Auth::user()->id)->whereDate('created_at', Carbon::today())->get();

        $data = [
            'totalOrders' => $orders->count(),
            'clearInvoices' => $invoices->where('status_id',5)->count(),
            'pendingInvoices' => $invoices->where('status_id', 4)->count(),
        ];
        // dd($orders);
        return view('customer.home', compact('data', 'latestOrders'));
        // return true;

    }
}

