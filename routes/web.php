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
    Route::get("/", "list")->name("cars.list");
    Route::get("/create", "createForm")->name("cars.createForm");
    Route::get("/update/{car}", "updateForm")->name("cars.updateForm");

    Route::post("/create", "create")->name("cars.create");
    Route::post("/update/{car}", "update")->name("cars.update");
    Route::delete("/delete/{car}", "delete")->name("cars.delete");
});

Route::group([
    "prefix" => "services",
    "controller" => ServiceController::class
], function () {
    Route::get("/", "list")->name("services.list");
    Route::get("/create", "createForm")->name("services.createForm");
    Route::get("/update/{service}", "updateForm")->name("services.updateForm");

    Route::post("/create", "create")->name("services.create");
    Route::post("/update/{service}", "update")->name("services.update");
    Route::delete("/delete/{service}", "delete")->name("services.delete");
});

Route::group([
    "prefix" => "mechanics",
    "controller" => MechanicController::class
], function () {
    Route::get("/", "list")->name("mechnaics.list");
    Route::get("/create", "createForm")->name("mechnaics.createForm");
    Route::get("/update/{mechnaic}", "updateForm")->name("mechnaics.updateForm");

    Route::post("/create", "create")->name("mechnaics.create");
    Route::post("/update/{mechnaic}", "update")->name("mechnaics.update");
    Route::delete("/delete/{mechnaic}", "delete")->name("mechnaics.delete");
});
