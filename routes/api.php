<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\UserController;
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
//GET untuk mendapatkan user by id
Route::get('user/{id}', [UserController::class, 'getUserById']);

//GET untuk mendapatkan semua user
Route::get('users', [UserController::class, 'getAllUsers']);

//POST untuk menambahkan data user
Route::post('users', [UserController::class, 'createUser' ]);

//POST untuk mengupdate data user
Route::put('user/{id}', [UserController::class, 'updateUser']);

Route::post('users/photo/{id}', [UserController::class, 'addPhotoProfile']);

//GET untuk mendapatkan data telpon
Route::get('users/{user_id}/phone', [PhoneController::class, 'getAllPhone']);

//POST untuk menambhkan data telpon
Route::post('users/{user_id}/phone', [PhoneController::class, 'createPhone']);

//DELETE untuk menghapus data telpon
Route::delete('users/{user_id}/phone/{id}', [PhoneController::class, 'deletePhone']);
