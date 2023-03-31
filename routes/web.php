<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Middleware\Authenticate;
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
Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/chungtoi', function() {
    return view('clients.chungtoi');
})->name('chungtoi');

Route::get('/login', [EntryController::class, 'loginForm'])->name('login');
Route::post('/login', [EntryController::class, 'login'])->name('loginPost');
Route::get('/logout', [EntryController::class, 'logout'])->name('logout');


Route::get('/contact', function() {
    return view('clients.contact');
})->name('contact');

Route::get('/policy', function() {
    return view('clients.policy');
})->name('policy');

Route::prefix('admin')->middleware(['auth', Authenticate::class])->group(function (){
    Route::prefix('categories')->group(function () {
        Route::get('create', [CategoryController::class, 'create'])->name('createCategory');
        Route::post('create', [CategoryController::class, 'store'])->name('storeCategory');
        Route::get('', [CategoryController::class, 'list'])->name('listCategory');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('editCategory');
        Route::put('edit/{id}', [CategoryController::class, 'save'])->name('saveCategory');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('deleteCategory');
    });

    Route::prefix('services')->group(function () {
        Route::get('create', [ServiceController::class, 'create'])->name('createService');
        Route::post('create', [ServiceController::class, 'store'])->name('storeService');
        Route::get('', [ServiceController::class, 'list'])->name('listService');
        Route::get('edit/{id}', [ServiceController::class, 'edit'])->name('editService');
        Route::put('edit/{id}', [ServiceController::class, 'save'])->name('saveService');
        Route::get('delete/{id}', [ServiceController::class, 'delete'])->name('deleteService');
    });

    Route::prefix('products')->group(function () {
        Route::get('create', [ProductController::class, 'create'])->name('createProduct');
        Route::post('create', [ProductController::class, 'store'])->name('storeProduct');
        Route::get('',[ProductController::class, 'list'])->name('listProduct');
        Route::get('edit/{id}',[ProductController::class, 'edit'])->name('editProduct');
        Route::put('edit/{id}',[ProductController::class, 'save'])->name('saveProduct');
        Route::get('delete/{id}',[ProductController::class, 'delete'])->name('deleteProduct');
    });
});







