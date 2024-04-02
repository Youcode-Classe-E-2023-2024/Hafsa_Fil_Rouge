<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

//Route::get('/login', function () {
//    return view('Auth.login');
//});

Route::get('/login', [LoginController::class,'login']);
Route::post('/login', [LoginController::class,'store']);

//Route::get('/register', function () {
//    return view('Auth.register');
//});

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/All_products', function () {
    return view('All_products');
});

Route::get('/Description', function () {
    return view('Description');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});

Route::get('/dashboard', function () {
    return view('Admin.Dashboard');
});
//Route::get('/dashboard', 'DashboardController@index')->middleware('auth');



