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

//index page
Route::get('/', function () {
    return view('index') ;
});

//hotels page
Route::get('/hotels', function () {
    return view('hotels') ;
});


//destination page
Route::get('/destinations', function () {
    return view('destinations') ;
});

//siswa
Route::get('/dataStudents','SiswaController@dataStudents');
Route::get('/siswa','SiswaController@index');
Route::patch('/siswa/{siswa}','SiswaController@edit');
Route::put('/siswa/{siswa}','SiswaController@update');
Route::delete('/siswa/{siswa}','SiswaController@destroy');
Route::post('/siswa','SiswaController@store');

//jurusan
Route::get('/dataJurusan','JurusanController@dataJurusan');
Route::get('/jurusan','JurusanController@index');
Route::post('/jurusan','JurusanController@store');
Route::patch('/jurusan/{jurusan}','JurusanController@edit');
Route::put('/jurusan/{jurusan}','JurusanController@update');
Route::delete('/jurusan/{jurusan}','JurusanController@destroy');

