<?php
/**
 * Created by PhpStorm.
 * User: Piotr Zdziarski
 * Date: 20.08.2018
 * Time: 09:55
 */

namespace App\Http\Controllers;


class RekrutacjaController extends Controller
{
    public function rekrutacja()
    {
        return view('sites.rekrutacja.rekrutacja');
    }

    public function rekrutacja1A()
    {
        return view('sites.rekrutacja.rekrutacja1A');
    }

    public function rekrutacja1B()
    {
        return view('sites.rekrutacja.rekrutacja1B');
    }

    public function rekrutacja1C()
    {
        return view('sites.rekrutacja.rekrutacja1C');
    }

    public function rekrutacja1D()
    {
        return view('sites.rekrutacja.rekrutacja1D');
    }
}