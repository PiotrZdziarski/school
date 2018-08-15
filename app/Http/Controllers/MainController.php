<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function aktualnosci()
    {
        return view('layouts.app');
    }

    public function patron()
    {
        return view('sites.patron');
    }

    public function dyrektorzy()
    {
        return view('sites.dyrektorzy');
    }

    public function w_rankingach()
    {
        return view('sites.w_rankingach');
    }

    //
}
