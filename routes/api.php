<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    "prefix" => "cars",
    "controller" => CarController::class
], function () {
    Route::get("/", "apiGet");
    Route::post("/create", "apiCreate");
    Route::put("/update/{car}", "apiUpdate");
    Route::delete("/delete/{car}", "apiDelete");
});

Route::group([
    "prefix" => "services",
    "controller" => ServiceController::class
], function () {
    Route::get("/", "apiGet");
    Route::post("/create", "apiCreate");
    Route::put("/update/{service}", "apiUpdate");
    Route::delete("/delete/{service}", "apiDelete");
});

Route::group([
    "prefix" => "mechanics",
    "controller" => MechanicController::class
], function () {
    Route::get("/", "apiGet");
    Route::post("/create", "apiCreate");
    Route::put("/update/{mechanic}", "apiUpdate");
    Route::delete("/delete/{mechanic}", "apiDelete");
});
