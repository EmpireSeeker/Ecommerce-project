<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\signController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\productController;

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
Route::get("/registration",[welcomeController::class,'registration'])->name('registration');
Route::get("/signup",[signController::class,'signup'])->name('signup');
Route::post("/registration",[signController::class,'registration'])->name('register');

Route::get("/",[UserController::class,'login'])->name('login');
Route::post("/loggin", [UserController::class,'loggin'])->name('loggin');
Route::middleware('auth')->group(function(){
Route::get("/userdashboard",[UserController::class,'userdashboard'])->name('userdashboard')->middleware('auth');
});


Route::get("components/sidebarall",[UserController::class,'sidebarall'])->name('sidebarall');
Route::get("/logout",[LogoutController::class,'logout'])->name('logout');
Route::get("components/userlist",[Usercontroller::class,'userlist'])->name('userlist');
Route::get("/product",[productController::class,'product'])->name('product');
Route::post("/registerproduct",[productController::class,'registerproduct'])->name('registerproduct');


