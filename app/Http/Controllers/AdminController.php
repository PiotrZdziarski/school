<?php
/**
 * Created by PhpStorm.
 * User: Piotr Zdziarski
 * Date: 21.08.2018
 * Time: 11:16
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


class AdminController extends Controller
{
    public function adminpanel()
    {
        return view('sites.admin');
    }
}