<?php
Route::get('/', function(){
    return view('welcome');
});
Route::get('/ujian', 'UjianController@index');
Route::get('/ujian/tambah', 'UjianController@tambah');
Route::post('/ujian/store', 'UjianController@store');
Route::get('/ujian/edit/{id}', 'UjianController@edit');
Route::put('/ujian/update/{id}', 'UjianController@update');
Route::get('/ujian/hapus/{id}', 'UjianController@delete');