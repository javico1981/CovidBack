<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('user')->group(function () {
    Route::get('', [UserController::class, 'getUsuarios']);
    Route::post('login', [UserController::class, 'log']);
    Route::post('register', [UserController::class, 'register']);
    Route::put('{id}', [UserController::class, 'update']);
    Route::post('restore_password', [UserController::class, 'RestorePassword']);
    Route::delete('{id}', [UserController::class, 'delete']);
});

Route::prefix('paciente')->group(function () {
    Route::get('', [PacienteController::class, 'getPacientes']);
    Route::get('{id}', [PacienteController::class, 'getPaciente']);
    Route::post('', [PacienteController::class, 'store']);
    Route::put('{id}', [PacienteController::class, 'update']);
    Route::delete('{id}', [PacienteController::class, 'delete']);

});
