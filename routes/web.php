<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::view('register','register')->name('register.form');
Route::view('login','login')->name('login.form');
Route::view('about','about-us')->name('about');
Route::view('terms','terms')->name('terms');
Route::view('contact','contact-us')->name('contact.form');


Route::get('profile',[MainController::class,'profile']);
Route::get('edit',[MainController::class,'editprofile'])->name('edit-profile');
