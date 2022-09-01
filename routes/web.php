<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhmucTruyenController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[IndexController::class,'home'] );

Route::get('/danh-muc/{slug}',[IndexController::class,'danhmuc']);

Route::get('/xem-truyen/{slug}',[IndexController::class,'xemtruyen']);

Route::get('/xem-chapter/{slug}',[IndexController::class,'xemchapter']);

Route::get('/tim-kiem',[IndexController::class,'timkiem']);



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/danhmuc', DanhmucTruyenController::class);

Route::resource('/truyen', TruyenController::class);

Route::resource('/chapter', ChapterController::class);

