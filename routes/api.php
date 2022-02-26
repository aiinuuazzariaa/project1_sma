<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//for register and login
Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');
Route::group(['middleware' => ['jwt.verify']], function (){

//route major
Route::get('/major', 'MajorController@show');
Route::get('/major/{id}', 'MajorController@detail');
Route::post('/major', 'MajorController@store');
Route::put('/major/{id}', 'MajorController@update');
Route::delete('/major/{id}', 'MajorController@destroy');

//route student
Route::get('/student', 'StudentController@show');
Route::get('/student/{student_name}', 'StudentController@detail');
Route::post('/student', 'StudentController@store');
Route::put('/student/{id}', 'StudentController@update');
Route::delete('/student/{id}', 'StudentController@destroy');
});