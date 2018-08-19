<?php
/**
 * Created by PhpStorm.
 * User: Piotr Zdziarski
 * Date: 19.08.2018
 * Time: 09:57
 */

namespace App\Http\Controllers;


class AchievementsController extends Controller
{
    public function stypendysci_prezesa_rady_ministrow()
    {
        return view('sites.achievements.stypendysci_prezesa_rady_ministrow');
    }

    public function stypendysci_zarzadu_starostwa_powiatowego()
    {
        return view('sites.achievements.stypendysci_zarzadu_starostwa_powiatowego');
    }
}