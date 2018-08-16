<?php

namespace App\Http\Controllers;


class nagrody_rady_pedagogicznej extends Controller
{
    public function nagrody_rady_pedagogicznej()
    {
        return view('sites.nagrody_rady_pedagogicznej');
    }

    public function najlepszy_filozof()
    {
        return view('sites.najlepszy_filozof');
    }

    public function najlepszy_przyrodnik()
    {
        return view('sites.najlepszy_przyrodnik');
    }

    public function najlepszy_filolog()
    {
        return view('sites.najlepszy_filolog');
    }

    public function najlepszy_geograf()
    {
        return view('sites.najlepszy_geograf');
    }
}