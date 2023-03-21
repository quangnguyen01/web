<?php

use App\Http\Controllers\HomeController;
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
/* /index đổi thành / thì default nó sẽ ra trang chủ nếu ko thì phải /index nó mới ra trang chủ */




Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/products', [HomeController::class, 'productList'])->name('sanpham');
Route::get('/product/{id}', [HomeController::class, 'productDetail'])->name('product-detail');

Route::get('/chungtoi', function() {
    return view('clients.chungtoi');
})->name('chungtoi');

Route::get('/service', function() {
    return view('clients.service');
})->name('service');

Route::get('/contact', function() {
    return view('clients.contact');
})->name('contact');






