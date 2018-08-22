<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    private $aktualnosciDB;

    public function __construct()
    {
        $aktualnosciDB = DB::table('aktualnosci')
            ->limit(5)
            ->orderBy('id', 'desc')
            ->get();
        $this->aktualnosciDB = $aktualnosciDB;
    }

    public function aktualnosci()
    {
        return view('layouts.app', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function kontakt()
    {
        return view('sites.kontakt', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function patron()
    {
        return view('sites.patron', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function dyrektorzy()
    {
        return view('sites.dyrektorzy', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function w_rankingach()
    {
        return view('sites.w_rankingach', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function nagrody_kola_wychowankow()
    {
        return view('sites.nagrody_kola_wychowankow', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function gloria_diligentiae_et_labori()
    {
        return view('sites.gloria_diligentiae_et_labori', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function nagroda_prof_heleny_jastrzebskiej()
    {
        return view('sites.nagroda_prof_heleny_jastrzebskiej', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function nagroda_dr_jana_wegnera()
    {
        return view('sites.nagroda_dr_jana_wegnera', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function nagroda_prof_jana_zbudniewka()
    {
        return view('sites.nagroda_prof_jana_zbudniewka', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function nagroda_prof_eugeniusza_wachowskiego()
    {
        return view('sites.nagroda_prof_eugeniusza_wachowskiego', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function nagroda_jozefa_chelmonskiego()
    {
        return view('sites.nagroda_jozefa_chelmonskiego', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function nagroda_boleslawy_lament()
    {
        return view('sites.nagroda_boleslawy_lament', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function rada_pedagogiczna()
    {
        return view('sites.rada_pedagogiczna', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function samorzad_szkolny()
    {
        return view('sites.samorzad_szkolny', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function statut_szkoly()
    {
        return view('sites.statut_szkoly', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function misja_szkoly()
    {
        return view('sites.misja_szkoly', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function kolo_wychowankow()
    {
        return view('sites.kolo_wychowankow', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function kolo_wychowankow_slawni_absolwenci()
    {
        return view('sites.kolo_wychowankow_slawni_absolwenci', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function kolo_wychowankow_historia()
    {
        return view('sites.kolo_wychowankow_historia', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function zjazdy_kolonialne()
    {
        return view('sites.zjazdy_kolonialne', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function klub_historyczny_ak()
    {
        return view('sites.klub_historyczny_ak', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function inauguracja_klubu()
    {
        return view('sites.inauguracja_klubu', ['aktualnosciDB' => $this->aktualnosciDB]);
    }


}
