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
}