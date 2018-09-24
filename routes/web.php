<?php

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

$router->get('authors', ['as' => 'authors.list', 'uses' => 'AuthorController@list']);
$router->get('authors/{authorId}', ['as' => 'authors.show', 'uses' => 'AuthorController@show']);
$router->post('authors', ['as' => 'authors.create', 'uses' => 'AuthorController@create']);
$router->post('authors/{authorId}', ['as' => 'authors.update', 'uses' => 'AuthorController@update']);
