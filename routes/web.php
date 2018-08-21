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
$router->get('/', ['uses' => 'HomeController@home']);


//NAV - SZKOLA
$router->get('/patron', ['uses' => 'MainController@patron']);
$router->get('/dyrektorzy', ['uses' => 'MainController@dyrektorzy']);
$router->get('/w_rankingach', ['uses' => 'MainController@w_rankingach']);
$router->get('/nagrody_kola_wychowankow', ['uses' => 'MainController@nagrody_kola_wychowankow']);
$router->get('/gloria_diligentiae_et_labori', ['uses' => 'MainController@gloria_diligentiae_et_labori']);
$router->get('/nagroda_prof_heleny_jastrzebskiej', ['uses' => 'MainController@nagroda_prof_heleny_jastrzebskiej']);
$router->get('/nagroda_dr_jana_wegnera', ['uses' => 'MainController@nagroda_dr_jana_wegnera']);
$router->get('/nagroda_prof_jana_zbudniewka', ['uses' => 'MainController@nagroda_prof_jana_zbudniewka']);
$router->get('/nagroda_prof_eugeniusza_wachowskiego', ['uses' => 'MainController@nagroda_prof_eugeniusza_wachowskiego']);
$router->get('/nagroda_jozefa_chelmonskiego', ['uses' => 'MainController@nagroda_jozefa_chelmonskiego']);
$router->get('/nagroda_boleslawy_lament', ['uses' => 'MainController@nagroda_boleslawy_lament']);
$router->get('/nagrody_rady_pedagogicznej', ['uses' => 'nagrody_rady_pedagogicznej@nagrody_rady_pedagogicznej']);
$router->get('/najlepszy_filozof', ['uses' => 'nagrody_rady_pedagogicznej@najlepszy_filozof']);
$router->get('/najlepszy_przyrodnik', ['uses' => 'nagrody_rady_pedagogicznej@najlepszy_przyrodnik']);
$router->get('/najlepszy_filolog', ['uses' => 'nagrody_rady_pedagogicznej@najlepszy_filolog']);
$router->get('/najlepszy_geograf', ['uses' => 'nagrody_rady_pedagogicznej@najlepszy_geograf']);
$router->get('/rada_pedagogiczna', ['uses' => 'MainController@rada_pedagogiczna']);
$router->get('/samorzad_szkolny', ['uses' => 'MainController@samorzad_szkolny']);
$router->get('/statut_szkoly', ['uses' => 'MainController@statut_szkoly']);
$router->get('/misja_szkoly', ['uses' => 'MainController@misja_szkoly']);
$router->get('/klub_historyczny_ak', ['uses' => 'MainController@klub_historyczny_ak']);
$router->get('/inauguracja_klubu', ['uses' => 'MainController@inauguracja_klubu']);

//KOLO WYCHOWANKOW
$router->get('/kolo_wychowankow', ['uses' => 'MainController@kolo_wychowankow']);
$router->get('/kolo_wychowankow_slawni_absolwenci', ['uses' => 'MainController@kolo_wychowankow_slawni_absolwenci']);
$router->get('/kolo_wychowankow_historia', ['uses' => 'MainController@kolo_wychowankow_historia']);
$router->get('/zjazdy_kolonialne', ['uses' => 'MainController@zjazdy_kolonialne']);

//NAV - INFORMACJE ////////////////////////////////////

$router->get('/plan_lekcji', ['uses' => 'InformationController@plan_lekcji']);
//BIBLIOTEKA
$router->get('/biblioteka_o_miejscu', ['uses' => 'InformationController@biblioteka_o_miejscu']);
$router->get('/biblioteka_godziny_otwarcia', ['uses' => 'InformationController@biblioteka_godziny_otwarcia']);
$router->get('/biblioteka_regulamin', ['uses' => 'InformationController@biblioteka_regulamin']);
$router->get('/biblioteka_lektury_obowiazkowe', ['uses' => 'InformationController@biblioteka_lektury_obowiazkowe']);
$router->get('/biblioteka_gazety_i_czasopisma', ['uses' => 'InformationController@biblioteka_gazety_i_czasopisma']);
$router->get('/biblioteka_filmoteka', ['uses' => 'InformationController@biblioteka_filmoteka']);
$router->get('/biblioteka_nowosci', ['uses' => 'InformationController@biblioteka_nowosci']);
$router->get('/biblioteka_online', ['uses' => 'InformationController@biblioteka_online']);
$router->get('/biblioteka_w_lowiczu', ['uses' => 'InformationController@biblioteka_w_lowiczu']);
$router->get('/biblioteka_bookcrossing', ['uses' => 'InformationController@biblioteka_bookcrossing']);
$router->get('/biblioteka_informacja_medialna', ['uses' => 'InformationController@biblioteka_informacja_medialna']);
$router->get('/biblioteka_ciekawe_strony_internetowe', ['uses' => 'InformationController@biblioteka_ciekawe_strony_internetowe']);

$router->get('/swieta_dni_wolne', ['uses' => 'InformationController@swieta_dni_wolne']);
$router->get('/zebrania_z_rodzicami', ['uses' => 'InformationController@zebrania_z_rodzicami']);
$router->get('/wydawanie_duplikatow', ['uses' => 'InformationController@wydawanie_duplikatow']);
$router->get('/procent', ['uses' => 'InformationController@procent']);
$router->get('/zajecia_dodatkowe', ['uses' => 'InformationController@zajecia_dodatkowe']);
$router->get('/RODO', ['uses' => 'InformationController@RODO']);


//NAV - OSIAGNIECIA ////////////////////////////////////
//STYPENDYSCI
$router->get('/stypendysci_prezesa_rady_ministrow', ['uses' => 'AchievementsController@stypendysci_prezesa_rady_ministrow']);
$router->get('/stypendysci_zarzadu_starostwa_powiatowego', ['uses' => 'AchievementsController@stypendysci_zarzadu_starostwa_powiatowego']);

//OSIAGNIECIA W OLIMPIADACH I KONKURSACH
$router->get('/osiagniecia_artystyczne', ['uses' => 'AchievementsController@osiagniecia_artystyczne']);
$router->get('/osiagniecia_biologiczne', ['uses' => 'AchievementsController@osiagniecia_biologiczne']);
$router->get('/osiagniecia_chemiczne', ['uses' => 'AchievementsController@osiagniecia_chemiczne']);
$router->get('/osiagniecia_edb', ['uses' => 'AchievementsController@osiagniecia_edb']);
$router->get('/osiagniecia_filozofia', ['uses' => 'AchievementsController@osiagniecia_filozofia']);
$router->get('/osiagniecia_fizyka_astronomia', ['uses' => 'AchievementsController@osiagniecia_fizyka_astronomia']);
$router->get('/osiagniecia_geografia', ['uses' => 'AchievementsController@osiagniecia_geografia']);
$router->get('/osiagniecia_historia', ['uses' => 'AchievementsController@osiagniecia_historia']);
$router->get('/osiagniecia_informatyka', ['uses' => 'AchievementsController@osiagniecia_informatyka']);
$router->get('/osiagniecia_j_angielski', ['uses' => 'AchievementsController@osiagniecia_j_angielski']);
$router->get('/osiagniecia_j_francuski', ['uses' => 'AchievementsController@osiagniecia_j_francuski']);
$router->get('/osiagniecia_j_niemiecki', ['uses' => 'AchievementsController@osiagniecia_j_niemiecki']);
$router->get('/osiagniecia_j_polski', ['uses' => 'AchievementsController@osiagniecia_j_polski']);
$router->get('/osiagniecia_j_rosyjski', ['uses' => 'AchievementsController@osiagniecia_j_rosyjski']);
$router->get('/osiagniecia_matematyka', ['uses' => 'AchievementsController@osiagniecia_matematyka']);
$router->get('/osiagniecia_przedsiebiorczosc', ['uses' => 'AchievementsController@osiagniecia_przedsiebiorczosc']);
$router->get('/osiagniecia_religia', ['uses' => 'AchievementsController@osiagniecia_religia']);
$router->get('/osiagniecia_sportowe', ['uses' => 'AchievementsController@osiagniecia_sportowe']);
$router->get('/osiagniecia_wiedza_o_spoleczenstwie', ['uses' => 'AchievementsController@osiagniecia_wiedza_o_spoleczenstwie']);
$router->get('/osiagniecia_inne', ['uses' => 'AchievementsController@osiagniecia_inne']);

//NAV - MATURA ////////////////////////////////////
$router->get('/matura2013', ['uses' => 'MaturaController@matura2013']);
$router->get('/matura2014', ['uses' => 'MaturaController@matura2014']);
$router->get('/matura2015', ['uses' => 'MaturaController@matura2015']);
$router->get('/matura2016', ['uses' => 'MaturaController@matura2016']);
$router->get('/matura2017', ['uses' => 'MaturaController@matura2017']);
$router->get('/matura2018', ['uses' => 'MaturaController@matura2018']);


//NAV - REKRUTACJA ////////////////////////////////////
$router->get('/rekrutacja', ['uses' => 'RekrutacjaController@rekrutacja']);
$router->get('/rekrutacja1A', ['uses' => 'RekrutacjaController@rekrutacja1A']);
$router->get('/rekrutacja1B', ['uses' => 'RekrutacjaController@rekrutacja1B']);
$router->get('/rekrutacja1C', ['uses' => 'RekrutacjaController@rekrutacja1C']);
$router->get('/rekrutacja1D', ['uses' => 'RekrutacjaController@rekrutacja1D']);


//NAV AKTUALNOSCI ////////////////////////////////////
$router->get('/aktualnosci', ['uses' => 'MainController@aktualnosci']);

//NAV KONTAKT ////////////////////////////////////
$router->get('/kontakt', ['uses' => 'MainController@kontakt']);
$router->get('/2mY5fG940fmt', ['uses' => 'AdminController@adminpanel']);

$router->get('/generatestring', function(){
   echo str_random(12);
});