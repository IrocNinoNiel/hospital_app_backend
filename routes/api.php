<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;

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

Route::middleware('auth:sanctum')->group(function(){
    // Route::resource('datas',DataController::class);
    Route::put('/datas/{id}',[DataController::class,'update']);
    Route::resource('appointment',AppointmentController::class);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/user',function(Request $request){
        return $request->user();
    });
});
Route::get('/datas',[DataController::class,'index']);

// To be protected
// Route::resource('datas',DataController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

