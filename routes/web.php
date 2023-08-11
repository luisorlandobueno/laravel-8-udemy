<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/inicio', [UserController::class, 'index']);

Route::get('/nombre/{name}', [UserController::class, 'showname']);

Route::get('/suma/{num?}', [UserController::class, 'suma']);
