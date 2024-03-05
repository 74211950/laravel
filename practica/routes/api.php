<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Htpp\Controller\UsuarioController;

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


Route::get('usuarios',[UsuarioController::class, 'index']);
Route::get('usuarios/{id}',[UsuarioController::class, 'show']);
Route::post('usuarios',[UsuarioController::class, 'store']);
Route::patch('usuarios/{id}',[UsuarioController::class, 'update']);
Route::delete('usuarios/{id}',[UsuarioController::class, 'destroy']);

Route::get('libros',[LibroController::class, 'index']);
Route::get('libros/{id}',[LibroController::class, 'show']);
Route::post('libros',[LibroController::class, 'store']);
Route::patch('libros/{id}',[LibroCOntroller::class, 'update']);
Route::delete('libros/{id}',[LibroController::class, 'destroy']);

Route::get('resenias',[ReseniaController::class, 'index']);
Route::get('resenias/{id}', [ReseniaController::class, 'show']);
Route::post('resenias', [ReseniaController::class, 'store']);
Route::patch('resenias/{id}', [ReseniaController::class, 'update']);
Route::delete('resenias/{id}', [ReseniaController::class, 'destroy']);

Route::get('autores', [AutorController::class, 'index']);
Route::get('autores/{id}' [AutorController::class, 'show']);
Route::post('autores', [AutorController::class, 'store']);
Route::patch('autores/{id}', [AutorController::class, 'update']);
Route::delete('autores/{id}', [AutorController::class, 'destroy']);
