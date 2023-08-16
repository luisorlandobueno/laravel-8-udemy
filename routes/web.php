<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdministratorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InvoiceController;
use PHPUnit\TextUI\XmlConfiguration\Group;



Route::view('/', 'welcome', ['name' => 'Gustavo']);
Route::view('/', 'child');


Route::get('/inicio', [UserController::class, 'index']);

//Route::get('/inicio', [UserController::class, 'index']);
//Route::get('/inicio', [UserController::class, 'index'])->middleware('checkage:80');

Route::get('/nombre/{name}', [UserController::class, 'showname']);

Route::get('/suma/{num?}', [UserController::class, 'suma']);


Route::namespace('Admin')->middleware('grupodemiddleware')->group(function(){
    
    Route::get('/admin', [AdministratorController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/invoice', [InvoiceController::class, 'index']);

});
