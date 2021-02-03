<?php

use Illuminate\Support\Facades\Route;

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
//Users
Route::get('/getUserByUid/{uid}', 'UsersController@getUserByUid');
Route::post('/storeUser', 'UsersController@storeUser');
// Cities
Route::get('/getCities', 'CitiesController@getCities');
// Clients
Route::post('/storeClient','ClientsController@storeClient');
Route::get('/getClients', 'ClientsController@getClients');
Route::post('/deleteClient/{id}', 'ClientsController@deleteClient');
Route::post('/editClients/{id}', 'ClientsController@editClient');
