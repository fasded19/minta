<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RenterController;
use App\Http\Controllers\RentingController;

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


Route::get("/kolcsonzesek",[RentingController::class, "getRentings"]);
Route::post("/kolcsonzesek",[RentingController::class, "addRenting"]);
Route::get("/kolcsonzesek/{id}",[RentingController::class, "getRenting"]);
Route::put("/kolcsonzesek/{id}",[RentingController::class, "modifyRenting"]);
Route::delete("/kolcsonzesek/{id}",[RentingController::class, "deleteRenting"]);

Route::get("/kolcsonzok",[RenterController::class, "getRenters"]);
Route::get("/kolcsonzok/{id}",[RenterController::class, "getRenter"]);
