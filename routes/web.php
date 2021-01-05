<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SearchController;

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
Route::get('/dotan', [SearchController::class, 'dotan'])->name('dotan');
Route::match(['get', 'post'], '/search', [SearchController::class, 'search'])->name('search');

//for ajax live search in search page
Route::post('/ajax-search', [SearchController::class, 'ajax_search'])->name('ajax_search');
Route::post('/brands-ajax-search', [SearchController::class, 'brands_ajax_search'])->name('brands_ajax_search');
Route::any('/test', [SearchController::class, "test"])->name('test');

//Route::match(['get', 'post'], '/ajaxsearch', [SearchController::class, '']);

    
Route::group(['middleware'=>['auth']], function(){

    Route::get('dashboard/fullcalendar', [CalenderController::class, 'index'])->name('calender');
    Route::post('dashboard/fullcalendar/create', [CalenderController::class, 'create']);
    Route::post('dashboard/fullcalendar/update', [CalenderController::class, 'update']);
    Route::post('dashboard/fullcalendar/delete', [CalenderController::class, 'delete']);

    
    //for product in admin panel 
    Route::match(['get', 'post'], 'dashboard/add-product', [ProductController::class, 'add_product'])->name('add-product');
    Route::get('dashboard/view-product', [ProductController::class, 'view_product'])->name('view-product');
    Route::match(['get', 'post'], 'dasbhoard/delete-product/{id}', [ProductController::class, 'delete_product'])->name('delete-product');
    Route::match(['get', 'post'], 'dashboard/edit-product/{id}', [ProductController::class, 'edit_product'])->name('edit-product');
    Route::post('dashboard/update-product/', [ProductController::class, 'update_product'])->name('update-product');
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

    Route::match(['get', 'post'], 'dashboard/compose-email', [EmailController::class,'compose_email'])->name('compose');
    Route::get('dashboard/inbox', [EmailController::class, "inbox"])->name('inbox');
    //Route::post('dashboard/send-email', [EmailController::class,'send_email'])->name('send');


    


});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
