<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\tokocontroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;



route::prefix('toko')->group(function(){


    route::get('/',
        [tokocontroller::class, 'index']);

    route::get('/detail',
        [tokocontroller::class, 'detail']);

    route::get('/about',
        [tokocontroller::class, 'about']);

    route::get('/produk',
        [tokocontroller::class, 'produk']);

    route::group(['middleware' => ['auth']], function(){

    route::get('/admin',
        [tokocontroller::class, 'admin'])->name('product.admin');


    route::get('/create',
        [tokocontroller::class, 'create'])->name('product.create');

    Route::get('/customers', [tokocontroller::class, 'customers'])->name('produk.customers');
    Route::get('AddCustomer', [tokocontroller::class, 'AddCustomer'])->name('produk.AddCustomer');
    Route::post('NewCustomer', [tokocontroller::class, 'NewCustomer'])->name('produk.NewCustomer');


    route::get('/{product}/edit',
        [tokocontroller::class, 'edit'])->name('product.edit');

    route::delete('/{product}',
        [tokocontroller::class, 'destroy'])->name('product.destroy');

    route::put('/{product}',
        [tokocontroller::class, 'update'])->name('product.update');

    route::post('/store',
        [tokocontroller::class, 'store'])->name('product.store');

        // Create a new customer
    Route::get('/customers/create', [CustomerController::class, 'create'])->name('produk.createCustomer');
    Route::post('/customers', [CustomerController::class, 'store'])->name('produk.storeCustomer');

        // Edit a customer
    Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('produk.editCustomer');
    Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('produk.updateCustomer');


        // Delete a customer
    Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('produk.deleteCustomer');

    


    });

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::post('/toko/product/{id}/buy', [ProductController::class, 'buy'])->name('product.buy');
    Route::get('/product/thankyou', function () {
        return view('product.thankyou');
    })->name('product.thankyou');


 });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
