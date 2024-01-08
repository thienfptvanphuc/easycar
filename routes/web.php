<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fe\HomeController;
use App\Http\Controllers\be\AdminController;

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
//Website:
Route::get('/', [HomeController::class,'home'])->name('fe.home');
Route::get('/about-us', [HomeController::class,'aboutus'])->name('fe.aboutus');
Route::get('/contact-us', [HomeController::class,'contactus'])->name('fe.contactus');

//System: 
Route::prefix('system')->group(function() {
   Route::get('/',[AdminController::class,'index'])->name('be.main');
});
