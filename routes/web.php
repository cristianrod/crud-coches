<?php

Route::get('/', function () {
    return view('menu.index');
});
Route::get('/coches', 'CocheController@index');
Route::get('/marcas', 'MarcaController@index');
Route::get('/coches/crear', 'CocheController@create');
Route::post('/coches', 'CocheController@store');
Route::get('/coches/editar/{coche}', 'CocheController@edit');
Route::post('/coches/actualizar/{coche}', 'CocheController@update');
Route::get('/coches/eliminar/{coche}', 'CocheController@delete');
Route::get('/coches/{marca}', 'CocheController@show');
