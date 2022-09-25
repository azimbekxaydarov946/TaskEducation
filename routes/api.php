<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OAuthController;
use App\Http\Controllers\ReportController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Register routing
Route::post('register', [OAuthController::class, 'register']);

//Login routing
Route::post('login', [OAuthController::class, 'login']);

//Customer routing
Route::middleware('auth:api')->group(function () {
    Route::get('home', [HomeController::class, 'index']);
    Route::get('report', [ReportController::class, 'index']);
});
