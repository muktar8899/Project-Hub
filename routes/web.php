<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect("/");

});


// Registration & Login Route
Route::post('/app/registration', "UserController@registration");
Route::post('/app/login', "UserController@login");

//Route::any('{slug}', 'HomeController@home')->where('slug', '([A-z\d-\/_.]+)?');
Route::any('{slug}', 'HomeController@home')->where('slug','([A-z]+)?');
