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

    $router->get('actors/{id}', ['uses' => 'ActorController@read']);

    $router->put('actors/{id}', ['uses' => 'ActorController@update']);

    $router->delete('actors/{id}', ['uses' => 'ActorController@delete']);

  });
