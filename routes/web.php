<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjectiveController;
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

Route::get('/', 'ObjectiveController@index');

Route::get('/create', function () {
    return view('create');
});

Route::post('/objectives/create', 'ObjectiveController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
