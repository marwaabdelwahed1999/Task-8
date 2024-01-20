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

Route::get('/', function () {
    return view('welcome');
});



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('/home', function () {
            return view('home');
        })->name('home');
        
        Route::get('/about', function () {
            return view('about');
        })->name('about');
        
        Route::get('/service', function () {
            return view('service');
        })->name('service');
        
        Route::get('/team', function () {
            return view('team');
        })->name('team');
        
        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');
        


    });