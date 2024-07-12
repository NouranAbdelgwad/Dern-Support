<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerAuth;
use App\Http\Controllers\HardwareSupportController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SoftwareSupportController;
use App\Http\Controllers\SparePartsController;
use App\Models\Customer;
use App\Models\Software_support;
use App\Models\SpareParts;
use Illuminate\Support\Facades\Auth;
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
    return view('components.home');
});
Route::get("/problems", [ProblemController::class, "show"]);
Route::get("/problem/{id}", [ProblemController::class, "show_details"]);
Route::view("/software_request", "components.software_request_support");
Route::post('/software_request', [SoftwareSupportController::class, 'store']);

Route::view("/hardware_request", "components.hardware_request_support");
Route::post('/hardware_request', [HardwareSupportController::class, 'store']);

Route::view("/dashboard", "components.dashboard");

Route::view("/sign_up", "components.sign_up");
Route::post("/sign_up", [CustomerAuth::class, "sign_up"]);

Route::view("/login", "components.login");
Route::post("/login", [CustomerAuth::class, "check"]);

Route::view("/index/software_request", [SoftwareSupportController::class, "index"]);
Route::view("/index/hardware_request", [HardwareSupportController::class, "index"]);
Route::get("/index/spare_parts", [SparePartsController::class, "index"]);
Route::delete("/delete/parts/{id}", [SparePartsController::class, "destroy"]);
Route::post("/add/part", [SparePartsController::class, "store"]);
Route::get("/put/part/{id}", [SparePartsController::class, "update"]);
Route::put("/edit/part/{id}", [SparePartsController::class, "edit"]);
