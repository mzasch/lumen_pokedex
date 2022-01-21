<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/test', ['uses' => 'AllenatoreController@test']);

$router->get('/allenatori', ['uses' => 'AllenatoreController@index']);
$router->get('/allenatori/{id}', ['uses' => 'AllenatoreController@show']);

$router->get('/palestre', ['uses' => 'PalestraController@index']);
$router->get('/palestre/{id}', ['uses' => 'PalestraController@show']);

$router->get('/pokemon', ['uses' => 'PokemonController@index']);
$router->get('/pokemon/{id}', ['uses' => 'PokemonController@show']);

$router->get('/tipi', ['uses' => 'TipoController@index']);
$router->get('/tipi/{id}', ['uses' => 'TipoController@show']);

$router->get('/mosse', ['uses' => 'MossaController@index']);
$router->get('/mosse/{id}', ['uses' => 'MossaController@show']);
