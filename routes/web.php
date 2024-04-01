<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SuppliersController;
use App\Models\Categories;
use App\Http\Controllers\Api;
use App\Http\Controllers\Categories2Controller;
use App\Http\Controllers\Suppliers2Controller;
use App\Http\Controllers\Product2Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------resources/views/login.blade.php-------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
})->middleware("guest")->name('login');

Route::get('/create', function(){
    return view('create');
});

Route::resource('product', ProductController::class)->middleware("auth");
Route::resource('categories', CategoriesController::class)->middleware("auth");
Route::resource('suppliers', SuppliersController::class)->middleware("auth");
Route::resource('/toko2/product', Product2Controller::class)->middleware("auth");
Route::resource('/toko2/categories', Categories2Controller::class)->middleware("auth");
Route::resource('/toko2/suppliers', Suppliers2Controller::class)->middleware("auth");
Route::get('showRegist', [LoginController::class, 'showRegist'])->middleware('guest');
Route::post('/regist', [LoginController::class, 'regist']);
Route::post('/attempt', [LoginController::class, 'attempt']);
Route::post('logout', [LoginController::class, 'logout'])->middleware("auth");
Route::get('listprod', [Api::class, 'listprod']);
Route::get('listsup', [Api::class, 'listsup']);
Route::get('listcat', [Api::class, 'listcat']);
Route::get('listprod2', [Api::class, 'listprod2']);
Route::get('listsup2', [Api::class, 'listsup2']);
Route::get('listcat2', [Api::class, 'listcat2']);
Route::post('listprodcat/{category}', function($category){

    $categories = Categories::query()
    ->where('nama', 'LIKE', "%{$category}%")
    ->get();

    return response()->json([
        'db' => $categories,
    ]);
});
