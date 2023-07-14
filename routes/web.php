<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nombre/{name}', 'UserController@showName');
Route::get('/inicio', 'UserController@index');
Route::get('/suma/{num?}', 'UserController@suma');

Route::namespace('Admin')->group(function (){
    Route::get('/admin', 'AdministratorController@index');
    Route::get('/dashboard', 'dashboardController@index');
    Route::get('/invoice', 'InvoiceController@index');
});

Route::resource('/cliente', 'CustomerController')->names([
    'index' => 'customer.start'
]);
