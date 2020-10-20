<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{id}', [HomeController::class, 'detail'])->name('detail');

Route::group(['middleware'=>['auth']], function(){
    Route::match(['get', 'post'], 'dashboard/add-product', [ProductController::class, 'add_product'])->name('add-product');
    Route::get('dashboard/view-product', [ProductController::class, 'view_product'])->name('view-product');
    Route::match(['get', 'post'], 'dasbhoard/delete-product/{id}', [ProductController::class, 'delete_product'])->name('delete-product');
    Route::match(['get', 'post'], 'dashboard/edit-product/{id}', [ProductController::class, 'edit_product'])->name('edit-product');
    Route::match(['get', 'post'], 'dashboard/add-website', [WebsiteController::class, 'store'])->name('website-create');
    Route::get('dashboard/view-websites', [WebsiteController::class, 'show'])->name('view-website');
    Route::match(['get', 'post'], 'dashboard/edit-website/{id}', [WebsiteController::class, 'update'])->name('edit-website');
    Route::match(['get', 'post'], 'dashboard/delete-website/{id}', [WebsiteController::class, 'destroy'])->name('delete-website');
    Route::match(['get', 'post'], 'dashboard/add-common/', [ProductController::class, 'add_common'])->name('add_common');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
