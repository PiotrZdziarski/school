<?php
/**
 * Created by PhpStorm.
 * User: Piotr Zdziarski
 * Date: 20.08.2018
 * Time: 09:55
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class MaturaController extends Controller
{
    public function __construct()
    {
        $aktualnosciDB = DB::table('aktualnosci')
            ->limit(5)
            ->orderBy('id', 'desc')
            ->get();
        $this->aktualnosciDB = $aktualnosciDB;
    }

    public function matura2013()
    {
        return view('sites.matura.matura2013', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function matura2014()
    {
        return view('sites.matura.matura2014', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function matura2015()
    {
        return view('sites.matura.matura2015', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function matura2016()
    {
        return view('sites.matura.matura2016', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function matura2017()
    {
        return view('sites.matura.matura2017', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function matura2018()
    {
        return view('sites.matura.matura2018', ['aktualnosciDB' => $this->aktualnosciDB]);
    }
}