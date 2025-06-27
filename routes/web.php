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

//here all route group which he connect with controller with middleware
Route::middleware('checkUser')->controller(MainController::class)->group(function () {

   //here all routed related to home
    Route::get('/','home')->name('home');

    //here all routes related to job
    Route::get('view/{id}','viewjob')->name('view.job'); // show job details  for user
    Route::post('searchjob','searchjob')->name('search.job');//for search job in homepage
    Route::post('applyjob','applyJob')->name('apply.job');//for job apply 
    Route::get('myjob','myjob')->name('my.job');//for check user applied job

    //here all routed related to user profile
    Route::get('profile','profile')->name('profile');//show user data only 
    Route::get('edit','editProfile')->name('edit.profile');//show user data but in form so user can update it
    Route::post('edit','editProfileSubmit')->name('edit.profile.submit');//for update user profile data
    
    Route::get('logout','logout')->name('logout');//for logout user

});


//here all route group which he connect with controller without middleware
Route::controller(MainController::class)->group(function () {

    //here all routes related to register
    Route::post('register','register')->name('register.submit');

    //here all routes related to login
    Route::post('login','login')->name('login.submit');

    //here all routes related to logout and contact  page
    Route::post('contact','contact')->name('contact.submit');//for submit contact form

    
});

    //other routed for static page or which  not use any functin in controller

    //route with middlewate for check if user logged in so login and register page not show
    Route::middleware('checkUser2')->controller(MainController::class)->group(function () {
    Route::view('login', 'login')->name('login.form');//show login form
    Route::view('register', 'register')->name('register.form');//show register form
});
   
    Route::view('contact','contact-us')->name('contact.form');//show only  contact form page
    Route::view('about','about-us')->name('about');//show only about page
    Route::view('terms','terms')->name('terms');//show only terms page







