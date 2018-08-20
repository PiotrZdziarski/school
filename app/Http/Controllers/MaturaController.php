<?php
/**
 * Created by PhpStorm.
 * User: Piotr Zdziarski
 * Date: 20.08.2018
 * Time: 09:55
 */

namespace App\Http\Controllers;


class MaturaController extends Controller
{
    public function matura2013()
    {
        return view('sites.matura.matura2013');
    }

    public function matura2014()
    {
        return view('sites.matura.matura2014');
    }

    public function matura2015()
    {
        return view('sites.matura.matura2015');
    }

    public function matura2016()
    {
        return view('sites.matura.matura2016');
    }

    public function matura2017()
    {
        return view('sites.matura.matura2017');
    }

    public function matura2018()
    {
        return view('sites.matura.matura2018');
    }
}