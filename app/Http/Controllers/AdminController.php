<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    private $route = '2mY5fG940fmt';

    public function adminpanel()
    {
        $aktualnosciDB = '';
        $aktualnosciDB = DB::table('aktualnosci')->orderBy('id', 'desc')->get();
        return view('sites.admin', array('aktualnosciDB' => $aktualnosciDB));
    }

    public function addaktualnosc(Request $request)
    {
        $title = $request->request->get('title');
        $description = $request->request->get('description');
        $now = date('Y-m-d H:i:s');

        DB::table('aktualnosci')->insert([
            'title' => $title,
            'description' => $description,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        session_start();
        $_SESSION['status'] = 'Dodano aktualność!';
        return redirect($this->route);
    }

    public function editaktualnosc(Request $request)
    {
        $title = $request->request->get('title');
        $description = $request->request->get('description');
        $id = $request->request->get('id');
        $now = date('Y-m-d H:i:s');

        DB::table('aktualnosci')->where('id', $id)->update([
            'title' => $title,
            'description' => $description,
            'updated_at' => $now
        ]);

        session_start();
        $_SESSION['status'] = 'Edytowano aktualność!';
        return redirect($this->route);
    }


    public function deleteaktualnosc($id)
    {
        DB::table('aktualnosci')->where('id', $id)->delete();
        session_start();
        $_SESSION['status'] = 'Usunięto aktualność!';
        return redirect($this->route);
    }
}