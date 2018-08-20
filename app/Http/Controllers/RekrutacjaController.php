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
}