<?php

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

Route::get('/',[App\Http\Controllers\PageController::class, 'index']);
Route::get('/uploadpage',[App\Http\Controllers\PageController::class, 'uploadpage']);
Route::post('/uploadproduct',[App\Http\Controllers\PageController::class, 'store']);
Route::get('/show',[App\Http\Controllers\PageController::class, 'show']);
Route::get('/download/{file}',[App\Http\Controllers\PageController::class, 'download']);
Route::get('/view/{id}',[App\Http\Controllers\PageController::class, 'view']);
Route::get('/products/{id}/delete',[App\Http\Controllers\PageController::class,'destory']);

Route::get('/users',[App\Http\Controllers\PdfController::class,'index']);
Route::get('/export',[App\Http\Controllers\PdfController::class,'export']);
