<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function aktualnosci()
    {
        return view('layouts.app');
    }

    public function kontakt()
    {
        return view('sites.kontakt');
    }

    public function patron()
    {
        return view('sites.patron');
    }

    public function dyrektorzy()
    {
        return view('sites.dyrektorzy');
    }

    public function w_rankingach()
    {
        return view('sites.w_rankingach');
    }

    public function nagrody_kola_wychowankow()
    {
        return view('sites.nagrody_kola_wychowankow');
    }

    public function gloria_diligentiae_et_labori()
    {
        return view('sites.gloria_diligentiae_et_labori');
    }

    public function nagroda_prof_heleny_jastrzebskiej()
    {
        return view('sites.nagroda_prof_heleny_jastrzebskiej');
    }

    public function nagroda_dr_jana_wegnera()
    {
        return view('sites.nagroda_dr_jana_wegnera');
    }

    public function nagroda_prof_jana_zbudniewka()
    {
        return view('sites.nagroda_prof_jana_zbudniewka');
    }

    public function nagroda_prof_eugeniusza_wachowskiego()
    {
        return view('sites.nagroda_prof_eugeniusza_wachowskiego');
    }

    public function nagroda_jozefa_chelmonskiego()
    {
        return view('sites.nagroda_jozefa_chelmonskiego');
    }

    public function nagroda_boleslawy_lament()
    {
        return view('sites.nagroda_boleslawy_lament');
    }

    public function rada_pedagogiczna()
    {
        return view('sites.rada_pedagogiczna');
    }

    public function samorzad_szkolny()
    {
        return view('sites.samorzad_szkolny');
    }

    public function statut_szkoly()
    {
        return view('sites.statut_szkoly');
    }

    public function misja_szkoly()
    {
        return view('sites.misja_szkoly');
    }

    public function kolo_wychowankow()
    {
        return view('sites.kolo_wychowankow');
    }

    public function kolo_wychowankow_slawni_absolwenci()
    {
        return view('sites.kolo_wychowankow_slawni_absolwenci');
    }

    public function kolo_wychowankow_historia()
    {
        return view('sites.kolo_wychowankow_historia');
    }

    public function zjazdy_kolonialne()
    {
        return view('sites.zjazdy_kolonialne');
    }

    public function klub_historyczny_ak()
    {
        return view('sites.klub_historyczny_ak');
    }

    public function inauguracja_klubu()
    {
        return view('sites.inauguracja_klubu');
    }


}
