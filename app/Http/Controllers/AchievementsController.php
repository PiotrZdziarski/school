<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class AchievementsController extends Controller
{
    private $aktualnosciDB;

    public function __construct()
    {
        $aktualnosciDB = DB::table('aktualnosci')
            ->limit(5)
            ->orderBy('id', 'desc')
            ->get();
        $this->aktualnosciDB = $aktualnosciDB;
    }

    public function stypendysci_prezesa_rady_ministrow()
    {
        return view('sites.achievements.stypendysci_prezesa_rady_ministrow', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function stypendysci_zarzadu_starostwa_powiatowego()
    {
        return view('sites.achievements.stypendysci_zarzadu_starostwa_powiatowego', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_artystyczne()
    {
        return view('sites.achievements.artystyczne', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_biologiczne()
    {
        return view('sites.achievements.biologiczne', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_chemiczne()
    {
        return view('sites.achievements.chemiczne', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_edb()
    {
        return view('sites.achievements.edukacja_dla_bezpieczenstwa', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_filozofia()
    {
        return view('sites.achievements.filozofia', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_fizyka_astronomia()
    {
        return view('sites.achievements.fizyka_astronomia', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_geografia()
    {
        return view('sites.achievements.geografia', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_historia()
    {
        return view('sites.achievements.historia', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_informatyka()
    {
        return view('sites.achievements.informatyka', ['aktualnosciDB' => $this->aktualnosciDB]);
    }


    public function osiagniecia_j_angielski()
    {
        return view('sites.achievements.j_angielski', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_j_francuski()
    {
        return view('sites.achievements.j_francuski', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_j_niemiecki()
    {
        return view('sites.achievements.j_niemiecki', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_j_polski()
    {
        return view('sites.achievements.j_polski', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_j_rosyjski()
    {
        return view('sites.achievements.j_rosyjski', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_matematyka()
    {
        return view('sites.achievements.matematyka', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_przedsiebiorczosc()
    {
        return view('sites.achievements.przedsiebiorczosc', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_religia()
    {
        return view('sites.achievements.religia', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_sportowe()
    {
        return view('sites.achievements.sportowe', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_wiedza_o_spoleczenstwie()
    {
        return view('sites.achievements.wiedza_o_spoleczenstwie', ['aktualnosciDB' => $this->aktualnosciDB]);
    }

    public function osiagniecia_inne()
    {
        return view('sites.achievements.inne', ['aktualnosciDB' => $this->aktualnosciDB]);
    }
}