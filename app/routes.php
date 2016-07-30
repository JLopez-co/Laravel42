<?php

Route::get('/', function() {
    return View::make('hello');
});

Route::get('arreglo', function() {
    $paises = array(
        '00' => 'Ecuador',
        '01' => 'chile',
        '02' => 'bolivia',
        '03' => 'argentina'
    );
    return View::make('Ejemplos/paises', array("paises" => $paises)
    );
});
Route::controller('ciudades','PaisesController');
Route::controller('paises', 'PaisesController');
Route::get('datos', function() {
    $datos = DB::select("select * from actor");

    return View::make('Ejemplos.actores', ['actores' => $datos]);
});

Route::get('flim', function() {
    
    $peliculas = DB::select("select title,description,rating,Special_features,length from film");   
    
    return View::make('Ejemplos.peliculas', ['peliculas' => $peliculas]);
});



