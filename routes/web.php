<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\CalenderController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


//to do list common, popup common and add common, add, crud website
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{id}', [HomeController::class, 'detail'])->name('detail');
Route::get('/dotan', [HomeController::class, 'dotan'])->name('dotan');


    Route::get('fullcalendar', [CalenderController::class, 'index']);
    Route::post('fullcalendar/create', [CalenderController::class, 'create']);
    Route::post('fullcalendar/update', [CalenderController::class, 'update']);
    Route::post('fullcalendar/delete', [CalenderController::class, 'destroy']);

Route::group(['middleware'=>['auth']], function(){
    
    //for product in admin panel 
    Route::match(['get', 'post'], 'dashboard/add-product', [ProductController::class, 'add_product'])->name('add-product');
    Route::get('dashboard/view-product', [ProductController::class, 'view_product'])->name('view-product');
    Route::match(['get', 'post'], 'dasbhoard/delete-product/{id}', [ProductController::class, 'delete_product'])->name('delete-product');
    Route::match(['get', 'post'], 'dashboard/edit-product/{id}', [ProductController::class, 'edit_product'])->name('edit-product');
    Route::get('dashboard/view-product/{id}', [ProductController::class, 'view_product_detail'])->name('view-product-detail');

    
    //for website in admin panel
    Route::match(['get', 'post'], 'dashboard/add-website', [WebsiteController::class, 'store'])->name('website-create');
    Route::get('dashboard/view-websites', [WebsiteController::class, 'show'])->name('view-website');
    Route::match(['get', 'post'], 'dashboard/edit-website/{id}', [WebsiteController::class, 'update'])->name('edit-website');
    Route::match(['get', 'post'], 'dashboard/delete-website/{id}', [WebsiteController::class, 'destroy'])->name('delete-website');
    Route::match(['get', 'post'], 'dashboard/add-common/', [ProductController::class, 'add_common'])->name('add-common');
    Route::any('dashboard/edit-com/{id}', [CommonController::class, 'edit_com'])->name('edit-common');
    Route::delete('dashboard/delete-common/{$id}', [CommonController::class, 'delete_common'])->name('delete-common');
    //Route::delete(['get', 'post'], 'dashboard/delete-common/{$id}', [CommonController::class, 'delete_common'])->name('delete-common');


    /*Route::get('fullcalendar', [CalenderController::class, 'index']);
    Route::post('fullcalendar/create', [CalenderController::class, 'create']);
    Route::post('fullcalendar/update', [CalenderController::class, 'update']);
    Route::post('fullcalendar/delete', [CalenderController::class, 'destroy']);*/



});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
