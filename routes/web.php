<?php

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

use App\Http\Controllers\MovieController;
Route::get('/browse_movies/', [MovieController::class, 'show']);


use App\Http\Controllers\AvatarsController;
//Route::get('/avatars/', [AvatarsController::class, 'index']);
//Route::get('/avatars/{id}', [AvatarsController::class, 'edit']);

Route::resource('/avatars', AvatarsController::class);
Route::post('/avatars/create', [AvatarsController::class, 'store']);
Route::post('/avatars/{id}/edit', [AvatarsController::class, 'update']);
Route::get('/manage-avatars/', [AvatarsController::class, 'manag_avatars']);
Route::get('/manage-avatars/{id}', [AvatarsController::class, 'manag_avatars']);
Route::get('/get-avatars/{id}', [AvatarsController::class, 'get_avatars']);

Route::get('/', function () {
    return view('welcome');
});
