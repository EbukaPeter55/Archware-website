<?php

use App\Http\Controllers\RecruitmentController;
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

Route::get('/homeFix', function () {
    return view('/services/homeFix');
});

Route::get('/services', function () {
    return view('services.services');
});

Route::get('/farm-management', function () {
    return view('services.farm-management');
});


Route::get('/website-design-and-development', function () {
    return view('services.service2');
});

Route::get('/mobile-app-development', function () {
    return view('services.service3');
});

Route::get('/ecommerce-online-web-stores', function () {
    return view('services.ecommerce');
});

Route::get('/project-management', function () {
    return view('services.pms');
});

Route::get('/account-expense-system', function () {
    return view('services.account-expense-system');
});

Route::get('/website-redesign', function () {
    return view('services.website-redesign');
});

Route::get('/web-maintenance', function () {
    return view('services.web-maintenance');
});

Route::get('/food-bank', function () {
    return view('services.foodbank');
});

Route::get('/subsidiaries', function () {
    return view('subsidiaries');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/join-us', function () {
    return view('joinus');
});

Route::get('/recruit', function () {
    return view('applications.recruit');
})->name('recruit');

Route::post('/store-recruit',   [RecruitmentController::class, 'storeRecruit'])->name('recruit.store.web');


Route::get('/home-train', function () {
    return view('services.home-train');
});

Route::get('/software_development', function () {
    return view('software_development');
});
