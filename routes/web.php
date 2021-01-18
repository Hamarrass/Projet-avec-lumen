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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('actors',  ['uses' => 'ActorController@all']);

    $router->post('actors', ['uses' => 'ActorController@create']);

    $router->get('actor/{id}', ['uses' => 'ActorController@read']);

    $router->put('actor/{id}', ['uses' => 'ActorController@update']);

    $router->delete('actor/{id}', ['uses' => 'ActorController@delete']);

  });

   $router->group(['prefix' => 'api'], function () use ($router) {
   $router->get('movies',  ['uses' => 'MovieController@all']);

    $router->post('movie/create', ['uses' => 'MovieController@create']);

    $router->get('movie/{id}', ['uses' => 'MovieController@read']);

    $router->put('movie/{id}', ['uses' => 'MovieController@update']);

    $router->delete('movie/{id}', ['uses' => 'MovieController@delete']);

    $router->get('movie/year/{year}', ['uses' => 'MovieController@moviesByYear']);

    $router->get('movie/actor/{actor}', ['uses' => 'MovieController@actorMovies']);

  });
