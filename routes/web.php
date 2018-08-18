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

//HOME
$router->get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

//NAV AKTUALNOSCI
$router->get('/aktualnosci', ['as' => 'aktualnosci', 'uses' => 'MainController@aktualnosci']);

//NAV - SZKOLA
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
$router->get('/najlepszy_filozof', ['as' => 'najlepszy_filozof', 'uses' => 'nagrody_rady_pedagogicznej@najlepszy_filozof']);
$router->get('/najlepszy_przyrodnik', ['as' => 'najlepszy_przyrodnik', 'uses' => 'nagrody_rady_pedagogicznej@najlepszy_przyrodnik']);
$router->get('/najlepszy_filolog', ['as' => 'najlepszy_filolog', 'uses' => 'nagrody_rady_pedagogicznej@najlepszy_filolog']);
$router->get('/najlepszy_geograf', ['as' => 'najlepszy_geograf', 'uses' => 'nagrody_rady_pedagogicznej@najlepszy_geograf']);
$router->get('/rada_pedagogiczna', ['as' => 'rada_pedagogiczna', 'uses' => 'MainController@rada_pedagogiczna']);
$router->get('/samorzad_szkolny', ['as' => 'samorzad_szkolny', 'uses' => 'MainController@samorzad_szkolny']);
$router->get('/statut_szkoly', ['as' => 'statut_szkoly', 'uses' => 'MainController@statut_szkoly']);
$router->get('/misja_szkoly', ['as' => 'misja_szkoly', 'uses' => 'MainController@misja_szkoly']);

//KOLO WYCHOWANKOW
$router->get('/kolo_wychowankow', ['as' => 'kolo_wychowankow', 'uses' => 'MainController@kolo_wychowankow']);
$router->get('/kolo_wychowankow_slawni_absolwenci', ['as' => 'kolo_wychowankow_slawni_absolwenci', 'uses' => 'MainController@kolo_wychowankow_slawni_absolwenci']);
$router->get('/kolo_wychowankow_historia', ['as' => 'kolo_wychowankow_historia', 'uses' => 'MainController@kolo_wychowankow_historia']);

//NAV - INFORMACJE ////////////////////////////////////
//BIBLIOTEKA
$router->get('/biblioteka_o_miejscu', ['as' => 'biblioteka_o_miejscu', 'uses' => 'InformationController@biblioteka_o_miejscu']);
$router->get('/biblioteka_godziny_otwarcia', ['as' => 'biblioteka_godziny_otwarcia', 'uses' => 'InformationController@biblioteka_godziny_otwarcia']);
$router->get('/biblioteka_regulamin', ['as' => 'biblioteka_regulamin', 'uses' => 'InformationController@biblioteka_regulamin']);
$router->get('/biblioteka_lektury_obowiazkowe', ['as' => 'biblioteka_lektury_obowiazkowe', 'uses' => 'InformationController@biblioteka_lektury_obowiazkowe']);
$router->get('/biblioteka_gazety_i_czasopisma', ['as' => 'biblioteka_gazety_i_czasopisma', 'uses' => 'InformationController@biblioteka_gazety_i_czasopisma']);
$router->get('/biblioteka_filmoteka', ['as' => 'biblioteka_filmoteka', 'uses' => 'InformationController@biblioteka_filmoteka']);
$router->get('/biblioteka_nowosci', ['as' => 'biblioteka_nowosci', 'uses' => 'InformationController@biblioteka_nowosci']);
$router->get('/biblioteka_online', ['as' => 'biblioteka_online', 'uses' => 'InformationController@biblioteka_online']);
$router->get('/biblioteka_w_lowiczu', ['as' => 'biblioteka_w_lowiczu', 'uses' => 'InformationController@biblioteka_w_lowiczu']);
$router->get('/biblioteka_bookcrossing', ['as' => 'biblioteka_bookcrossing', 'uses' => 'InformationController@biblioteka_bookcrossing']);
$router->get('/biblioteka_informacja_medialna', ['as' => 'biblioteka_informacja_medialna', 'uses' => 'InformationController@biblioteka_informacja_medialna']);
$router->get('/biblioteka_ciekawe_strony_internetowe', ['as' => 'biblioteka_ciekawe_strony_internetowe', 'uses' => 'InformationController@biblioteka_ciekawe_strony_internetowe']);
$router->get('/swieta_dni_wolne', ['as' => 'swieta_dni_wolne', 'uses' => 'InformationController@swieta_dni_wolne']);
$router->get('/zebrania_z_rodzicami', ['as' => 'zebrania_z_rodzicami', 'uses' => 'InformationController@zebrania_z_rodzicami']);