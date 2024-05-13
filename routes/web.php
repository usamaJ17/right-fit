<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TonerController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [TonerController::class, 'logout']);

    // Route::get('{any}', [TonerController::class, 'index']);
    Route::get('components/{any}', [TonerController::class, 'components']);
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function (){
    Route::get('/index', [App\Http\Controllers\HomeController::class, 'admin_index'])->name('index');
    Route::get('/product-create', [App\Http\Controllers\HomeController::class, 'product_create'])->name('product_create');
    Route::resource('product',ProductController::class);
    Route::resource('catagory',CategoryController::class);
    Route::post('catagory/delete/{category_id}',[CategoryController::class,'destroy']);
    Route::resource('sub-catagory',SubCategoryController::class);
});

