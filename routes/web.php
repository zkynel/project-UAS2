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



route::prefix('toko')->group(function(){


    route::get('/',
        [tokocontroller::class, 'index']);

    route::get('/detail',
        [tokocontroller::class, 'detail']);

    route::get('/about',
        [tokocontroller::class, 'about']);

    route::group(['middleware' => ['auth']], function(){

    route::get('/admin',
        [tokocontroller::class, 'admin'])->name('product.admin');

    route::get('/create',
        [tokocontroller::class, 'create'])->name('product.create');

    route::get('/{product}/edit',
        [tokocontroller::class, 'edit'])->name('product.edit');

    route::delete('/{product}',
        [tokocontroller::class, 'destroy'])->name('product.destroy');

    route::put('/{product}',
        [tokocontroller::class, 'update'])->name('product.update');

    route::post('/store',
        [tokocontroller::class, 'store'])->name('product.store');


    });


    
    
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
