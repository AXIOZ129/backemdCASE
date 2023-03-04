<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HijoController;
use App\Http\Controllers\PadreController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\AdministradorController;

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

Route::apiResource('administradores', AdministradorController::class);
Route::apiResource('guardianes', GuardianController::class);
Route::apiResource('padres', PadreController::class);
Route::apiResource('hijos', HijoController::class);
