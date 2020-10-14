<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::group(['middleware'=>['auth']], function(){
    Route::match(['get', 'post'], 'dashboard/add-product', [ProductController::class, 'add_product'])->name('add-product');
    Route::get('dashboard/view-product', [ProductController::class, 'view_product'])->name('view-product');
    Route::match(['get', 'post'], 'dasbhoard/delete-product/{id}', [ProductController::class, 'delete_product'])->name('delete-product');
    Route::match(['get', 'post'], 'dashboard/edit-product/{id}', [ProductController::class, 'edit_product'])->name('edit-product');

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
