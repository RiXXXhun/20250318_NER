<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\ServiceController;
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

Route::group([
    "prefix" => "cars",
    "controller" => CarController::class
], function () {
    
});

Route::group([
    "prefix" => "services",
    "controller" => ServiceController::class
], function () {
    
});

Route::group([
    "prefix" => "mechanics",
    "controller" => MechanicController::class
], function () {
    
});
