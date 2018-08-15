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

$router->get('/', ['as' => 'home', 'uses' => 'HomeController@home']);
$router->get('/aktualnosci', ['as' => 'aktualnosci', 'uses' => 'MainController@aktualnosci']);
$router->get('/patron', ['as' => 'patron', 'uses' => 'MainController@patron']);
$router->get('/dyrektorzy', ['as' => 'dyrektorzy', 'uses' => 'MainController@dyrektorzy']);
$router->get('/w_rankingach', ['as' => 'w_rankingach', 'uses' => 'MainController@w_rankingach']);
