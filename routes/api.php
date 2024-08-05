<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


 Route::get('/list', [CategoryController::class,'index']);
 Route::get('/show', [CategoryController::class,'show']);
 Route::get('/update/{id}',[CategoryController::class,'update']);
 Route::get('/delete/{id}',[CategoryController::class,'destroy']);
 Route::post('/add',[CategoryController::class,'store']);