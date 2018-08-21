<?php
namespace App\Http\Controllers;


class InformationController extends Controller
{
    public function biblioteka_o_miejscu()
    {
        return view('sites.information.biblioteka_o_miejscu');
    }

    public function biblioteka_godziny_otwarcia()
    {
        return view('sites.information.biblioteka_godziny_otwarcia');
    }

    public function biblioteka_regulamin()
    {
        return view('sites.information.biblioteka_regulamin');
    }

    public function biblioteka_lektury_obowiazkowe()
    {
        return view('sites.information.biblioteka_lektury_obowiazkowe');
    }

    public function biblioteka_gazety_i_czasopisma()
    {
        return view('sites.information.biblioteka_gazety_i_czasopisma');
    }

    public function biblioteka_filmoteka()
    {
        return view('sites.information.biblioteka_filmoteka');
    }

    public function biblioteka_nowosci()
    {
        return view('sites.information.biblioteka_nowosci');
    }

    public function biblioteka_online()
    {
        return view('sites.information.biblioteka_online');
    }

    public function biblioteka_w_lowiczu()
    {
        return view('sites.information.biblioteka_w_lowiczu');
    }

    public function biblioteka_bookcrossing()
    {
        return view('sites.information.biblioteka_bookcrossing');
    }

    public function biblioteka_informacja_medialna()
    {
        return view('sites.information.biblioteka_informacja_medialna');
    }

    public function biblioteka_ciekawe_strony_internetowe()
    {
        return view('sites.information.biblioteka_ciekawe_strony_internetowe');
    }

    public function swieta_dni_wolne()
    {
        return view('sites.information.swieta_dni_wolne');
    }

    public function zebrania_z_rodzicami()
    {
        return view('sites.information.zebrania_z_rodzicami');
    }

    public function wydawanie_duplikatow()
    {
        return view('sites.information.wydawanie_duplikatow');
    }

    public function procent()
    {
        return view('sites.information.procent');
    }

    public function zajecia_dodatkowe()
    {
        return view('sites.information.zajecia_dodatkowe');
    }

    public function RODO()
    {
        return view('sites.information.RODO');
    }

    public function plan_lekcji()
    {
        return view('sites.information.plan_lekcji');
    }
}