<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $aktulnosciDB;

    public function __construct()
    {
        $aktualnosciDB = DB::table('aktualnosci')
            ->limit(5)
            ->orderBy('id', 'desc')
            ->get();
        $this->aktualnosciDB = $aktualnosciDB;
    }

    public function home()
    {
        return view('sites.home', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

}
