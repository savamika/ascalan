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
    if (Session::has('setLanguage')){
        App::setLocale(Session::get('setLanguage'));
    }else{
        App::setLocale('en');
    }
    return view('welcome');
});

Route::get('/login', function () {
    if (Session::has('setLanguage')){
        App::setLocale(Session::get('setLanguage'));
    }else{
        App::setLocale('en');
    }
    return view('login');
});

Route::get('/register', function () {
    if (Session::has('setLanguage')){
        App::setLocale(Session::get('setLanguage'));
    }else{
        App::setLocale('en');
    }
    return view('register');
});

Route::get('/user/home', function () {
    if (Session::has('setLanguage')){
        App::setLocale(Session::get('setLanguage'));
    }else{
        App::setLocale('en');
    }
    return view('/users/home');
});

Route::get('/user/regin', function () {
    if (Session::has('setLanguage')){
        App::setLocale(Session::get('setLanguage'));
    }else{
        App::setLocale('en');
    }
    return view('/users/regin');
});

Route::get('/legal', function () {
    if (Session::has('setLanguage')){
        App::setLocale(Session::get('setLanguage'));
    }else{
        App::setLocale('en');
    }
    return view('/legal/legal');
});

Route::get('/replace_language/{locale}', function ($locale) {
   Session::put('setLanguage', $locale);
   App::setLocale($locale);
   return $locale;
});
