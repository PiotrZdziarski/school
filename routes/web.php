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
$router->get('/nagrody_kola_wychowankow', ['as' => 'nagrody_kola_wychowankow', 'uses' => 'MainController@nagrody_kola_wychowankow']);
$router->get('/gloria_diligentiae_et_labori', ['as' => 'gloria_diligentiae_et_labori', 'uses' => 'MainController@gloria_diligentiae_et_labori']);
$router->get('/nagroda_prof_heleny_jastrzebskiej', ['as' => 'nagroda_prof_heleny_jastrzebskiej', 'uses' => 'MainController@nagroda_prof_heleny_jastrzebskiej']);
$router->get('/nagroda_dr_jana_wegnera', ['as' => 'nagroda_dr_jana_wegnera', 'uses' => 'MainController@nagroda_dr_jana_wegnera']);
$router->get('/nagroda_prof_jana_zbudniewka', ['as' => 'nagroda_prof_jana_zbudniewka', 'uses' => 'MainController@nagroda_prof_jana_zbudniewka']);
$router->get('/nagroda_prof_eugeniusza_wachowskiego', ['as' => 'nagroda_prof_eugeniusza_wachowskiego', 'uses' => 'MainController@nagroda_prof_eugeniusza_wachowskiego']);
$router->get('/nagroda_jozefa_chelmonskiego', ['as' => 'nagroda_jozefa_chelmonskiego', 'uses' => 'MainController@nagroda_jozefa_chelmonskiego']);
$router->get('/nagroda_boleslawy_lament', ['as' => 'nagroda_boleslawy_lament', 'uses' => 'MainController@nagroda_boleslawy_lament']);
$router->get('/nagrody_rady_pedagogicznej', ['as' => 'nagrody_rady_pedagogicznej', 'uses' => 'nagrody_rady_pedagogicznej@nagrody_rady_pedagogicznej']);
