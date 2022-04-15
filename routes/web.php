<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\HomeController As adminhomecontroller;
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

Route::get('/home',[HomeController::class, 'index'])->name('index');
Route::get('/products',[HomeController::class, 'products'])->name('products');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/blog',[HomeController::class, 'blog'])->name('blog');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/testimonials',[HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/terms',[HomeController::class, 'terms'])->name('terms');
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//**************************admin panel
Route::get('/admin',[adminhomecontroller::class, 'index'])->name('index');

