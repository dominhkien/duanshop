<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardAccountController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardSizeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VariantProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// category
Route::get("/genre/create", [CategoryController::class, "create"])->name('genre.create');
Route::post("/genre/store", [CategoryController::class, "store"])->name('genre.store');
Route::delete("/genredelete/{category}", [CategoryController::class, "destroy"])->name('genre.delete');
Route::get("/genre/{category}/edit", [CategoryController::class, "edit"])->name('genre.edit');
Route::put("/genre/{category}", [CategoryController::class, "update"])->name('genre.update');
// end category

// brand
Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
Route::delete('/brand/delete/{brand}', [BrandController::class, 'destroy'])->name('brand.delete');
Route::get('/brand/{brand}/edit', [BrandController::class, 'edit'])->name('brand.edit');
Route::put('/brand/{brand}', [BrandController::class, 'update'])->name('brand.update');
// end brand
//size
Route::get('/size/create', [SizeController::class, 'create'])->name('size.create');
Route::post('/size/store', [SizeController::class, 'store'])->name('size.store');
Route::get('/size/{size}/edit', [SizeController::class, 'edit'])->name('size.edit');
Route::put('/size/{size}', [SizeController::class, 'update'])->name('size.update');
Route::delete('/size/delete/{size}', [SizeController::class, 'destroy'])->name('size.delete');
// end size
// product
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');
//end product
//variant product
Route::get('/variantproduct/create/{id}', [DashboardSizeController::class, 'create'])->name('variant.create');
Route::post('/variantproduct/create', [DashboardSizeController::class, 'store'])->name('variant.store');
Route::delete('/variantproduct/delete/{id}', [DashboardSizeController::class, 'destroy'])->name('variant.delete');
Route::put('/variantproduct/update/{id}', [DashboardSizeController::class, 'update'])->name('variant.update');
Route::get('/variantproduct/update/{id}/{id_sp}', [DashboardSizeController::class, 'edit'])->name('variant.edit');
//end variant
//account
Route::delete('/account/delete/{id}',[DashboardAccountController::class,'destroy'])->name('account.delete');
// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/dashboardsize', [DashboardSizeController::class, 'index'])->name('dashboardsize.index');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/account',[DashboardAccountController::class,'index'])->name('account.index');

Route::get('/',[ClientController::class,'index'])->name('client.index');
//end dashboard
