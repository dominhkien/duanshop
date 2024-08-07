<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardAccountController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardSizeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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
Route::group(['prefix' => 'genre'], function () {
    Route::get("/create", [CategoryController::class, "create"])->name('genre.create');
    Route::post("/store", [CategoryController::class, "store"])->name('genre.store');
    Route::delete("/delete/{category}", [CategoryController::class, "destroy"])->name('genre.delete');
    Route::get("/{category}/edit", [CategoryController::class, "edit"])->name('genre.edit');
    Route::put("/{category}", [CategoryController::class, "update"])->name('genre.update');
});
// end category

// brand
Route::group(['prefix' => 'brand'], function () {
    Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/store', [BrandController::class, 'store'])->name('brand.store');
    Route::delete('/delete/{brand}', [BrandController::class, 'destroy'])->name('brand.delete');
    Route::get('/{brand}/edit', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/{brand}', [BrandController::class, 'update'])->name('brand.update');
});
// end brand

// size
Route::group(['prefix' => 'size'], function () {
    Route::get('/create', [SizeController::class, 'create'])->name('size.create');
    Route::post('/store', [SizeController::class, 'store'])->name('size.store');
    Route::get('/{size}/edit', [SizeController::class, 'edit'])->name('size.edit');
    Route::put('/{size}', [SizeController::class, 'update'])->name('size.update');
    Route::delete('/delete/{size}', [SizeController::class, 'destroy'])->name('size.delete');
});
// end size

// product
Route::group(['prefix' => 'product'], function () {
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');
});
// end product

// variant product
Route::group(['prefix' => 'variantproduct'], function () {
    Route::get('/create/{id}', [DashboardSizeController::class, 'create'])->name('variant.create');
    Route::post('/create', [DashboardSizeController::class, 'store'])->name('variant.store');
    Route::delete('/delete/{id}', [DashboardSizeController::class, 'destroy'])->name('variant.delete');
    Route::put('/update/{id}', [DashboardSizeController::class, 'update'])->name('variant.update');
    Route::get('/update/{id}/{id_sp}', [DashboardSizeController::class, 'edit'])->name('variant.edit');
});
// end variant

// account
Route::delete('/account/delete/{id}', [DashboardAccountController::class, 'destroy'])->name('account.delete');

// dashboard
Route::group(['prefix' => 'dashboard', 'middleware' => 'checkAdmin'], function () {
    Route::get('/', [DashboardController::class, 'home'])->name('dashboard.home');
    Route::get('/brand-category', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/size', [DashboardSizeController::class, 'index'])->name('dashboardsize.index');
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/account', [DashboardAccountController::class, 'index'])->name('account.index');
});
Route::get('/', [ClientController::class, 'index'])->name('client.index');

Route::get('/category/{id}', [ClientController::class, 'productcate'])->name('client.productcate');
Route::get('/pricelow', [ClientController::class, 'pricelow'])->name('client.pricelow');
Route::get('/pricehigh', [ClientController::class, 'pricehigh'])->name('client.pricehigh');
Route::get('/search', [ClientController::class, 'search'])->name('client.search');
// end dashboard

// details
Route::get('/product-detail/{id}', [DetailController::class, 'index'])->name('detail.index');
//cart
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove/{id_sp_kc}', [CartController::class, 'remove'])->name('cart.remove');

// login
Route::group(['prefix' => 'account'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/post-login', [LoginController::class, 'login'])->name('post.login');
    Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
    Route::post('/post-register', [RegisterController::class, 'store'])->name('post.register');
    Route::get('/forgot/password', [ForgotController::class, 'index'])->name('forgot.index');
    Route::post("forgot/password", [ForgotController::class, "forgetPasswordPost"])->name("forgot.post");
    Route::get("reset/password/{token}/{email}", [ForgotController::class, "resetPassword"])->name("reset.password");
    Route::post("reset/password/post", [ForgotController::class, "resetPasswordPost"])->name("reset.password.post");
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/info', [LoginController::class, 'info'])->name('info');
    Route::get('/update-account', [LoginController::class, 'edit'])->name('myaccount.edit');
    Route::post('/post-myaccount', [LoginController::class, 'update'])->name('myaccount.update');
});
Route::post('/vnpayment', [PaymentController::class,'vnpay_payment'])->name('payment');
Route::get('/thanks',function(){
    return view('client.cart.thanks');
});
