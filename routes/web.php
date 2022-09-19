<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Response;
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

Route::get('/', [App\Http\Controllers\HomeController::class,'index']) -> name('home');


Route::get('/them-san-pham', [App\Http\Controllers\HomeController::class, 'getAdd']);
Route::post('/them-san-pham', [App\Http\Controllers\HomeController::class, 'postAdd'])->name('addProduct');

Route::prefix('posts')->name('post.')->group(function() {
    Route::get('/',[UsersController::class,'index']);
});