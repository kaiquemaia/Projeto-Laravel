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

Route::get('/lista-filmes', 'FilmeController@index'); // vai buscar o arquivo index dentro de CONTROLLER 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/multiplicacao/{numero1}/{numero2}', function($numero1, $numero2){
    echo "<h1>Multiplicacao</h1>";

    $resultado = ($numero1 * $numero2);
    return $resultado;
});

