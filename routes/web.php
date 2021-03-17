<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnasController;
use App\Http\Controllers\KontaktyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\AkciiController;
use App\Http\Controllers\KypitController;
use App\Http\Controllers\VozvratController;
use App\Http\Controllers\PolitikaController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\IdentifyController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\Admin\SlideUploadController;
use App\Http\Controllers\Admin\AkciiUploadController;


Route::get('/o_nas', [OnasController::class, 'index'])->name('onas');
Route::get('/kontakty', [KontaktyController::class, 'index'])->name('kontakty');
Route::get('/kypit', [KypitController::class, 'index'])->name('kypit');
Route::get('/aktsii', [AkciiController::class, 'index'])->name('aktsii');
Route::get('/aktsii/{url}', [AkciiController::class, 'show'])->name('showAktsii');
Route::get('/vozvrat', [VozvratController::class, 'index'])->name('vozvrat');
Route::get('/politika', [PolitikaController::class, 'index'])->name('politika');
Route::get('/', [IndexController::class, 'index']);
Route::get('/catalog/{category_id}', [ProductController::class, 'showCategory'])->name('showCategory');
Route::get('/blog', 'BlogsController@show')->name('showBlog');
Route::get('/blog/{url}', 'BlogsController@article')->name('showArticle');
Route::get('/catalog/{category_id}/{produt_url}', [ProductController::class, 'show'])->name('showProduct');
Route::get('/cart', 'CartController@index')->name('cartIndex');
Route::resource('carts', 'CartController');
Route::resource('profile', 'ProfileController');
Route::get('/identify', 'IdentifyController@index')->name('identify');
Route::post('/add-to-cart', 'CartController@addToCart')->name('addToCart');
Route::get('/image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('/image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::get('/logout', [LogoutController::class, 'index'])->name('logout');


Route::middleware(['role:sclad|admin'])->prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'indexadmin'])->name('HomeAdmin');
    Route::resource('category', 'Admin\CategoriesController');
    Route::resource('sclad', 'Admin\ScladController');
    Route::resource('product', 'Admin\ProductsController');
    Route::resource('gallery', 'Admin\ProductImageController');
    Route::resource('scladproduct', 'Admin\ScladProductController');
    Route::resource('supplier', 'Admin\SuppliersController');
    Route::resource('price', 'Admin\PricesController');
    Route::resource('amounts', 'Admin\AmountsController');
    Route::resource('analytics', 'Admin\AnalyticsController');
    Route::resource('basket', 'Admin\BasketController');
    Route::resource('sale', 'Admin\SaleController');
    Route::resource('blogs', 'Admin\BlogsController');
    Route::resource('slidershome', 'Admin\SlidersHomeController');
    Route::resource('akciihome', 'Admin\AkciiHomeController');
    Route::get('/money-chart/{id}', 'Admin\ScladController@moneyChart')->name('moneyChart');
    Route::get('/amount-chart/{id}', 'Admin\ScladController@amountChart')->name('amountChart');
    Route::get('/image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
    Route::post('/image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
    Route::get('/slide-upload', 'Admin\SlideUploadController@imageUpload')->name('slide.upload');
    Route::post('/slide-upload', 'Admin\SlideUploadController@imageUploadPost')->name('slide.upload.post');
    Route::get('/akcii-upload', 'Admin\AkciiUploadController@imageUpload')->name('akcii.upload');
    Route::post('/akcii-upload', 'Admin\AkciiUploadController@imageUploadPost')->name('akcii.upload.post');

});

