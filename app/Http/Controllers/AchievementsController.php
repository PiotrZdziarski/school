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

    public function osiagniecia_artystyczne()
    {
        return view('sites.achievements.artystyczne');
    }

    public function osiagniecia_biologiczne()
    {
        return view('sites.achievements.biologiczne');
    }

    public function osiagniecia_chemiczne()
    {
        return view('sites.achievements.chemiczne');
    }

    public function osiagniecia_edb()
    {
        return view('sites.achievements.edukacja_dla_bezpieczenstwa');
    }

    public function osiagniecia_filozofia()
    {
        return view('sites.achievements.filozofia');
    }

    public function osiagniecia_fizyka_astronomia()
    {
        return view('sites.achievements.fizyka_astronomia');
    }

    public function osiagniecia_geografia()
    {
        return view('sites.achievements.geografia');
    }

    public function osiagniecia_historia()
    {
        return view('sites.achievements.historia');
    }

    public function osiagniecia_informatyka()
    {
        return view('sites.achievements.informatyka');
    }


    public function osiagniecia_j_angielski()
    {
        return view('sites.achievements.j_angielski');
    }
}