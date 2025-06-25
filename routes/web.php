<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;

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


Route::view('about','about-us')->name('about');
Route::view('terms','terms')->name('terms');
Route::view('contact','contact-us')->name('contact.form');


Route::get('profile',[MainController::class,'profile']);
Route::get('edit',[MainController::class,'editprofile'])->name('edit-profile');
Route::get('view/{id}',[MainController::class,'viewjob'])->name('view.job');


//here we create route of register page
Route::view('register','register')->name('register.form');
Route::post('register',[MainController::class,'register'])->name('register.submit');

//here we create route of login page
Route::get('login', function () {
    if (session('user_id')) {
        return redirect()->route('home');
    }
    return view('login');
})->name('login.form');
Route::post('login',[MainController::class,'login'])->name('login.submit');

