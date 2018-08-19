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
$router->get('/wydawanie_duplikatow', ['as' => 'wydawanie_duplikatow', 'uses' => 'InformationController@wydawanie_duplikatow']);
$router->get('/procent', ['as' => 'procent', 'uses' => 'InformationController@procent']);
$router->get('/zajecia_dodatkowe', ['as' => 'zajecia_dodatkowe', 'uses' => 'InformationController@zajecia_dodatkowe']);
$router->get('/RODO', ['as' => 'RODO', 'uses' => 'InformationController@RODO']);
$router->get('/stypendysci_prezesa_rady_ministrow', ['as' => 'stypendysci_prezesa_rady_ministrow', 'uses' => 'AchievementsController@stypendysci_prezesa_rady_ministrow']);
$router->get('/stypendysci_zarzadu_starostwa_powiatowego', ['as' => 'stypendysci_zarzadu_starostwa_powiatowego', 'uses' => 'AchievementsController@stypendysci_zarzadu_starostwa_powiatowego']);
$router->get('/osiagniecia_artystyczne', ['as' => 'osiagniecia_artystyczne', 'uses' => 'AchievementsController@osiagniecia_artystyczne']);
$router->get('/osiagniecia_biologiczne', ['as' => 'osiagniecia_biologiczne', 'uses' => 'AchievementsController@osiagniecia_biologiczne']);
$router->get('/osiagniecia_chemiczne', ['as' => 'osiagniecia_chemiczne', 'uses' => 'AchievementsController@osiagniecia_chemiczne']);
$router->get('/osiagniecia_edb', ['as' => 'osiagniecia_edb', 'uses' => 'AchievementsController@osiagniecia_edb']);
$router->get('/osiagniecia_filozofia', ['as' => 'osiagniecia_filozofia', 'uses' => 'AchievementsController@osiagniecia_filozofia']);
$router->get('/osiagniecia_fizyka_astronomia', ['as' => 'osiagniecia_fizyka_astronomia', 'uses' => 'AchievementsController@osiagniecia_fizyka_astronomia']);
$router->get('/osiagniecia_geografia', ['as' => 'osiagniecia_geografia', 'uses' => 'AchievementsController@osiagniecia_geografia']);
$router->get('/osiagniecia_historia', ['as' => 'osiagniecia_historia', 'uses' => 'AchievementsController@osiagniecia_historia']);
$router->get('/osiagniecia_informatyka', ['as' => 'osiagniecia_informatyka', 'uses' => 'AchievementsController@osiagniecia_informatyka']);
$router->get('/osiagniecia_j_angielski', ['as' => 'osiagniecia_j_angielski', 'uses' => 'AchievementsController@osiagniecia_j_angielski']);
$router->get('/osiagniecia_j_francuski', ['as' => 'osiagniecia_j_francuski', 'uses' => 'AchievementsController@osiagniecia_j_francuski']);
$router->get('/osiagniecia_j_niemiecki', ['as' => 'osiagniecia_j_niemiecki', 'uses' => 'AchievementsController@osiagniecia_j_niemiecki']);
$router->get('/osiagniecia_j_polski', ['as' => 'osiagniecia_j_polski', 'uses' => 'AchievementsController@osiagniecia_j_polski']);
$router->get('/osiagniecia_j_rosyjski', ['as' => 'osiagniecia_j_rosyjski', 'uses' => 'AchievementsController@osiagniecia_j_rosyjski']);
$router->get('/osiagniecia_matematyka', ['as' => 'osiagniecia_matematyka', 'uses' => 'AchievementsController@osiagniecia_matematyka']);