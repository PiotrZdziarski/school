<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class InformationController extends Controller
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

    public function biblioteka_o_miejscu()
    {
        return view('sites.information.biblioteka_o_miejscu', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_godziny_otwarcia()
    {
        return view('sites.information.biblioteka_godziny_otwarcia', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_regulamin()
    {
        return view('sites.information.biblioteka_regulamin', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_lektury_obowiazkowe()
    {
        return view('sites.information.biblioteka_lektury_obowiazkowe', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_gazety_i_czasopisma()
    {
        return view('sites.information.biblioteka_gazety_i_czasopisma', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_filmoteka()
    {
        return view('sites.information.biblioteka_filmoteka', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_nowosci()
    {
        return view('sites.information.biblioteka_nowosci', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_online()
    {
        return view('sites.information.biblioteka_online', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_w_lowiczu()
    {
        return view('sites.information.biblioteka_w_lowiczu', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_bookcrossing()
    {
        return view('sites.information.biblioteka_bookcrossing', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_informacja_medialna()
    {
        return view('sites.information.biblioteka_informacja_medialna', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function biblioteka_ciekawe_strony_internetowe()
    {
        return view('sites.information.biblioteka_ciekawe_strony_internetowe', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function swieta_dni_wolne()
    {
        return view('sites.information.swieta_dni_wolne', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function zebrania_z_rodzicami()
    {
        return view('sites.information.zebrania_z_rodzicami', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function wydawanie_duplikatow()
    {
        return view('sites.information.wydawanie_duplikatow', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function procent()
    {
        return view('sites.information.procent', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function zajecia_dodatkowe()
    {
        return view('sites.information.zajecia_dodatkowe', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function RODO()
    {
        return view('sites.information.RODO', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function plan_lekcji()
    {
        return view('sites.information.plan_lekcji', ['aktualnosciDB' => $this->aktualnosciDB]);
    }
}