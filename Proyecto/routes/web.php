<?php

use \App\Film;
use \App\Product;

//Generales

Route::get('/', "PagesController@home");
Route::get('/about', "PagesController@about");
Route::get('/contact', "TicketsController@create");
Route::post('/contact', 'TicketsController@store');

//Tickets

Route::get('/tickets', "TicketsController@index");
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug?}/edit', 'TicketsController@update');
Route::post('/ticket/{slug?}/delete', 'TicketsController@destroy');

//Peliculas

Route::get('/films/create', "FilmsController@create");
Route::post('/films/create', "FilmsController@store");

Route::get('/films','FilmsController@index');
Route::post('/films/{titulo?}','FilmsController@show');
Route::get('/films/{id?}/edit','FilmsController@edit');
Route::post('/films/{id?}/edit','FilmsController@update');
Route::post('/films/{id?}/delete','FilmsController@destroy');
Route::get('/films/{id?}/like','FilmsController@like');


//Tienda

Route::get('/shop','ShopController@index');

//Autenticacion

Route::get('/login','PagesController@login');
Route::post('/login','UserController@login');

//Datos Prueba

Route::get('/genFilm',function(){
    $faker = Faker\Factory::create();

    for($i=0; $i<10; $i++){
        $film = new Film(array(
            'titulo' => $faker->name,
            'descripcion' => $faker->text,
            'fecha_estreno' => $faker->date(),
            'director' => $faker->name,
            'duracion' => $faker->name,
            'imagen' => $faker->imageUrl('1200','600'),
        ));
        $film->save();
    }
    return redirect('/films')->with('status', 'Datos aleatorios generados correctamente.');
});

Route::get('/genShop',function(){
    $faker = Faker\Factory::create();

    for($i=0; $i<10; $i++){
        $film = new Product(array(
            'nombre' => $faker->name,
            'precio' => $faker->randomFloat(),
            'descripcion' => $faker->text,
            'imagen' => $faker->imageUrl('1200','600'),
        ));
        $film->save();
    }
    return redirect('/films')->with('status', 'Datos aleatorios generados correctamente.');
});