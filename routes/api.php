<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ControlGarrafonesController;
use App\Http\Controllers\GarrafonController;
use App\Http\Controllers\MailController;
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

Route::prefix('auth')->group(function () {
    Route::post('/register',[AuthController::class,'store']);
    Route::post('/login',[AuthController::class, 'login'])->name('login');
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('control')->group(function () {
        Route::get('/activos',[ControlGarrafonesController::class,'index']);
        Route::get('/inventario',[GarrafonController::class,'index']);
        Route::post('/register',[ControlGarrafonesController::class,'store']);
        Route::put('/finish',[ControlGarrafonesController::class, 'finalizarControl']);
    });

    Route::post('auth/logout',[AuthController::class, 'logout']);

});

Route::fallback(function () {
    return response('Método no permitido', 400);
});

Route::get('/{any}', function () {
    return response('Acción no permitida',400);
})->where('any', '.*');

