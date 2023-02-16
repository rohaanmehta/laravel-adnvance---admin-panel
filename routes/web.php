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

// Route::get('/', function () {
//     return view('first');
// })->middleware('myauth');

Route::get('/', 'Home@index');
Route::get('About', 'About@index');
Route::get('Login', 'Login@index');
Route::get('Standard_register', 'Standard_register@index');

Route::get('login', 'admin@view');
Route::post('adminLogin', 'Admin@Login');

Route::middleware('myauth')->group(function () {
    Route::post('adminLogout', 'Admin@logout');
    Route::get('admin', 'Admin@dashboard');
    Route::get('content', 'Content@view');
    Route::get('content_status', 'Content@status');
    Route::get('delete_content/{id}', 'Content@delete_content');
    Route::get('content_edit/{id}', 'Content@content_edit');
    Route::post('contentinsert', 'Content@contentinsert');
});
