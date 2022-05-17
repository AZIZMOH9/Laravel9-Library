<?php

use App\Http\Controllers\admin\AdminProductController;
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
Route::get('/referance',[HomeController::class, 'referance'])->name('referance');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/testimonials',[HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/terms',[HomeController::class, 'terms'])->name('terms');
Route::get('/product/{id}',[HomeController::class, 'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}',[HomeController::class, 'categoryproducts'])->name('categoryproducts');
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//**************************home panel

//**************************admin panel
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[adminhomecontroller::class, 'index'])->name('index');
    //**************************admin panel
    Route::get('/setting',[adminhomecontroller::class, 'setting'])->name('setting');
    Route::post('/setting',[adminhomecontroller::class, 'settingupdate'])->name('setting.update');

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
    //**************************admin product
    Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
});
    //**************************admin product
    Route::prefix('/image')->name('image.')->controller(\App\Http\Controllers\admin\ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::get('/create/{pid}', 'create')->name('create');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
    });
});