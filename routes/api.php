<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\PadletController;
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


Route::get('/padlets', [PadletController::class,'index']);
Route::get('/padlets/{id}', [PadletController::class,'findById']);

Route::post('padlet', [PadletController::class,'save']);
Route::put('padlet/{id}', [PadletController::class,'update']);
Route::delete('padlet/{id}', [PadletController::class,'delete']);
Route::get('/padlet/{id}/entry', [EntryController::class,'getEntriesOfPadlet']);


Route::get('/entries', [EntryController::class,'index']);
Route::get('/entries/{id}', [EntryController::class,'findById']);


Route::post('entry', [EntryController::class,'save']);
Route::put('entry/{id}', [EntryController::class,'update']);
Route::delete('entry/{id}', [EntryController::class,'delete']);
