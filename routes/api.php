<?php

use App\Http\Controllers\RecruitmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('contactus/message', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.message');

// Recruitment API
Route::post('/recruit-store', [RecruitmentController::class, 'store'])->name('recruit.store');


// Route::post('/store-recruit',   [RecruitmentController::class, 'storeRecruit'])->name('recruit.store.web');
