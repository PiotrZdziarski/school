<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class nagrody_rady_pedagogicznej extends Controller
{
    public function __construct()
    {
        $aktualnosciDB = DB::table('aktualnosci')
            ->limit(5)
            ->orderBy('id', 'desc')
            ->get();
        $this->aktualnosciDB = $aktualnosciDB;
    }

    public function nagrody_rady_pedagogicznej()
    {
        return view('sites.nagrody_rady_pedagogicznej', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function najlepszy_filozof()
    {
        return view('sites.najlepszy_filozof', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function najlepszy_przyrodnik()
    {
        return view('sites.najlepszy_przyrodnik', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function najlepszy_filolog()
    {
        return view('sites.najlepszy_filolog', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function najlepszy_geograf()
    {
        return view('sites.najlepszy_geograf', ['aktualnosciDB' => $this->aktualnosciDB]);
    }
}