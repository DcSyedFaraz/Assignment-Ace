<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\InvoicesController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BlogsController as AdminBlogController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\web\BlogsController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\OrderController;
use App\Http\Controllers\web\PagesController;
use App\Http\Controllers\Customer\HomeController as CustomerHomeController;
use App\Http\Controllers\Customer\OrdersController as CustomerOrdersController;
use App\Http\Controllers\Customer\InvoicesController as CustomerInvoicesController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Customer\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Web_Setting
    Route::resource('setting', WebSettingController::class);

    // Orders
    Route::get('get-orders', [OrdersController::class, 'getOrders'])->name('orders.get');
    Route::resource('orders', OrdersController::class);

    // Invoices
    Route::resource('invoices', InvoicesController::class);

    // Contacts
    Route::get('get-contacts', [AdminContactController::class, 'getContacts'])->name('contacts.get');
    Route::resource('contacts', AdminContactController::class);

    // Customers
    Route::resource('customers', CustomersController::class);

    // Service
    Route::post('services/slug', [ServiceController::class, 'getSlug'])->name('services.getSlug');
    Route::resource('services', ServiceController::class);

    // Blogs
    Route::post('blogs/slug', [AdminBlogController::class, 'getSlug'])->name('blogs.getSlug');
    Route::resource('blogs', AdminBlogController::class);
});





Route::prefix('customer')->name('customer.')->middleware(['auth', 'verified', 'customer'])->group(function () {

    Route::get('/', [CustomerHomeController::class, 'index'])->name('home');

    // Orders
    Route::resource('orders', CustomerOrdersController::class);

    // Invoices
    Route::resource('invoices', CustomerInvoicesController::class);

    // Profile
    Route::resource('profile', ProfileController::class)->only(['index', 'update']);

    // Change Password
    Route::get('change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');
    Route::post('change-password', [ProfileController::class, 'changePasswordUpdate'])->name('profile.change-password.change');
});



Route::prefix('profile')->name('profile.')->middleware(['auth'])->group(function () {
        if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
            Route::get('password', [ChangePasswordController::class, 'edit'])->name('password.edit');
            Route::post('password', [ChangePasswordController::class, 'update'])->name('password.update');
            Route::post('profile', [ChangePasswordController::class, 'updateProfile'])->name('password.updateProfile');
            Route::post('profile/destroy', [ChangePasswordController::class, 'destroy'])->name('password.destroyProfile');
        }
    });



Route::group(['namespace' => 'web'], function () {

    Route::get('/{any}', function () {
        return view('layouts.web');
    })->where('any','.*');
});



// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact.store');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
