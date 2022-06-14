<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;
use GuzzleHttp\Promise\Create;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('magazin/index');
});

Route::get('/Blog', function () {
    return view('magazin/blog');
})->name('magazin/blog');

Route::get('/Blogsingle', function () {
    return view('magazin/blog-single');
})->name('magazin/blogsingle');

Route::get('/cart', function () {
    return view('magazin/cart');
})->name('magazin/cart');

Route::get('/shop', function () {
    return view('magazin/shop');
})->name('magazin/shop');

Route::get('/checkout', function () {
    return view('magazin/checkout');
})->name('magazin/checkout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/account', function () {
    return view('magazin/account');
})->middleware(['auth'])->name('magazin/account');

Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/test', function () {
    return view('magazin/test');
})->name('magazin/test');

Route::get('/register', function () {
    return view('auth/register');
})->name('register');

Route::get('/ProductDetails', [App\Http\Controllers\ProductsController::class, 'productsdetails'])->name('magazin/product details');
Route::post('/index', [App\Http\Controllers\ContactController::class, 'create'])->name('zayavka');
Route::get('/admin', [App\Http\Controllers\ContactController::class, 'admin'])->middleware(['role:admin'])->name('magazin/accountadmin');
Route::get('/index', [App\Http\Controllers\ProductsController::class, 'index'])->name('magazin/index');
Route::get('/shop', [App\Http\Controllers\ProductsController::class, 'shop'])->name('magazin/shop');
Route::get('/kabinet', [App\Http\Controllers\ContactController::class, 'showByUser'])->name('kabinet');
Route::get('/admin/{id}', [App\Http\Controllers\AdminController::class, 'deleteMessage'])->middleware(['role:admin'])->name('delete');
Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'view'])->name('magazin/contact-us');
Route::post('/admin/update', [App\Http\Controllers\ContactController::class, 'updateMessageSubmit'])->middleware(['role:admin'])->name('updateMessageSubmit');
Route::post('/adminka', [App\Http\Controllers\ProductsController::class, 'createe'])->name('sozdatproduct');

require __DIR__.'/auth.php';
