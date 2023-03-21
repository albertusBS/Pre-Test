<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AddProjectController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', [ProjectController::class, 'show'])->middleware('auth');

Route::get('/project/addproject', [AddProjectController::class, 'index'])->middleware('auth');
Route::post('/project/addproject', [AddProjectController::class, 'store']);

Route::get('/project/updateproject/{id}', [AddProjectController::class, 'edit']);
Route::put('/project/updateproject/{id}', [AddProjectController::class, 'update']);
Route::get('/hapus/{id}', [AddProjectController::class, 'delete']);
