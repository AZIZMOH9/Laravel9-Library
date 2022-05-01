<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\HomeController As adminhomecontroller;
use App\Http\Controllers\admin\categoryController As admincategorycontroller;
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
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[adminhomecontroller::class, 'index'])->name('index');
//**************************admin category
    Route::prefix('/category')->name('category.')->controller(admincategorycontroller::class)->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
});
});