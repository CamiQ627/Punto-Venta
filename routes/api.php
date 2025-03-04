<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CodigoBarrasController;
use App\Http\Controllers\PrecioController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    Route::get('categorias', [CategoriaController::class, 'index']);
    Route::get('productos', [ProductoController::class, 'index']);
    Route::get('codigos-barras', [CodigoBarrasController::class, 'index']);
    Route::get('precios', [PrecioController::class, 'index']);

    Route::middleware('role:ROLE_ADMIN')->group(function () {
        Route::apiResource('categorias', CategoriaController::class)->except(['index']);
        Route::apiResource('productos', ProductoController::class)->except(['index']);
        Route::apiResource('codigos-barras', CodigoBarrasController::class)->except(['index']);
        Route::apiResource('precios', PrecioController::class)->except(['index']);
    });
});



/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
