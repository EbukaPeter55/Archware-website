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
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/service2', function () {
    return view('service2');
});

Route::get('/service3', function () {
    return view('service3');
});

Route::get('/subsidiaries', function () {
    return view('subsidiaries');
});

Route::get('/contacts', function () {
    return view('contacts');
});

