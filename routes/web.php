<?php

use App\Models\Customer;
use App\Mail\RenewalReminderMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\PageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
Route::get('/tracking', [PageController::class, 'tracking'])->name('tracking');
Route::get('/payment', [PageController::class, 'payment'])->name('payment');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');

Route::get('admin-login', [AdminAuthController::class, 'loginIndex'])->name('admin.login');
Route::post('admin-login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('admin-logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => ['auth:admin', 'is_super_admin']], function () {
    Route::get('admin-register', [AdminAuthController::class, 'showRegister'])->name('admin.register');
    Route::post('admin-register', [AdminAuthController::class, 'register'])->name('admin.register.submit');
    Route::get('admin-list',[AdminAuthController::class, 'list'])->name('admin.register.list');

    Route::get('admins/{id}/edit', [AdminAuthController::class, 'edit'])->name('admin.edit');
    Route::post('admins/{id}/permissions', [AdminAuthController::class, 'updatePermissions'])->name('admin.update.permissions');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::get('customers', [CustomerController::class, 'index'])->name('customers.index')->middleware('permission:view customer');
    Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create')->middleware('permission:add customer');
    Route::post('customers', [CustomerController::class, 'store'])->name('customers.store')->middleware('permission:add customer');
    Route::get('customer/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit')->middleware('permission:edit customer');
    Route::post('customer/{id}', [CustomerController::class, 'update'])->name('customers.update')->middleware('permission:edit customer');
    Route::delete('customer/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy')->middleware('permission:delete customer');

    Route::get('products', [ProductController::class, 'index'])->name('products.index')->middleware('permission:view product');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create')->middleware('permission:add product');
    Route::post('products', [ProductController::class, 'store'])->name('products.store')->middleware('permission:add product');
    Route::get('product/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('permission:edit product');
    Route::post('product/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('permission:edit product');
    Route::delete('product-images/{productImage}', [ProductController::class, 'destroyImage'])->name('product-images.destroy');
    Route::delete('product/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('permission:delete product');

    // Route::resource('products', ProductController::class)->middleware('permission:manage products');

});

