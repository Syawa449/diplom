<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
Route::get('/ProductDetails', function () {
    return view('magazin/product-details');
})->name('magazin/product details');

Route::get('/Blog', function () {
    return view('magazin/blog');
})->name('magazin/blog');

Route::get('/Blogsingle', function () {
    return view('magazin/blog-single');
})->name('magazin/blogsingle');



Route::get('/index', function () {
    return view('magazin/index');
})->name('magazin/index');

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

Route::get('/admin/contact', function () {
    return view('magazin/admin-contact');
})->name('admin-contact');



Route::get('/register', function () {
    return view('auth/register');
})->name('register');

Route::post('/index', [App\Http\Controllers\ContactController::class, 'create'])->name('zayavka');
Route::post('/admin/contact', [App\Http\Controllers\ContactController::class, 'admincontact'])->name('admin-contact');

Route::get('/kabinet', [App\Http\Controllers\ContactController::class, 'showByUser'])->name('kabinet');



Route::get('/contactus', [App\Http\Controllers\ContactController::class, 'deleteMessage'])->middleware(['role:admin'])->name('delete');

Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'view'])->name('magazin/contact-us');
Route::get('/admin', [App\Http\Controllers\ContactController::class, 'admin'])->middleware(['role:admin'])->name('update');
Route::post('/admin/update', [App\Http\Controllers\ContactController::class, 'updateMessageSubmit'])->middleware(['role:admin'])->name('updateMessageSubmit');



require __DIR__.'/auth.php';
