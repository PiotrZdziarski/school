<?php
/**
 * Created by PhpStorm.
 * User: Piotr Zdziarski
 * Date: 20.08.2018
 * Time: 09:55
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class RekrutacjaController extends Controller
{
    public function __construct()
    {
        $aktualnosciDB = DB::table('aktualnosci')
            ->limit(5)
            ->orderBy('id', 'desc')
            ->get();
        $this->aktualnosciDB = $aktualnosciDB;
    }

    public function rekrutacja()
    {
        return view('sites.rekrutacja.rekrutacja', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function rekrutacja1A()
    {
        return view('sites.rekrutacja.rekrutacja1A', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function rekrutacja1B()
    {
        return view('sites.rekrutacja.rekrutacja1B', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function rekrutacja1C()
    {
        return view('sites.rekrutacja.rekrutacja1C', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function rekrutacja1D()
    {
        return view('sites.rekrutacja.rekrutacja1D', ['aktualnosciDB' => $this->aktualnosciDB]);
    }
}