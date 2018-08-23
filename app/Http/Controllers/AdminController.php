<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;


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
        $name = '';
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('assets/img/aktualnosci', $name);
        }
        $now = date('Y-m-d H:i:s');

        DB::table('aktualnosci')->insert([
            'title' => $title,
            'description' => $description,
            'image' => $name,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $checkidDB = DB::table('aktualnosci')->take(1)->orderBy('id', 'desc')->get();
        $id = $checkidDB[0]->id;

        session_start();
        $_SESSION['status'] = "Dodano aktualność! ID - $id";
        return redirect($this->route);
    }

    public function editaktualnosc(Request $request)
    {
        $title = $request->request->get('title');
        $description = $request->request->get('description');
        $id = $request->request->get('id');
        $previousname = DB::table('aktualnosci')->where('id', $id)->select('image')->get();
        $previousname = $previousname[0]->image;
        $now = date('Y-m-d H:i:s');

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('assets/img/aktualnosci', $name);
        }

        $finalname = $previousname;

        if(isset($name)) {
            if($name != '') {
                $finalname = $name;
            }
        }

        DB::table('aktualnosci')->where('id', $id)->update([
            'title' => $title,
            'description' => $description,
            'image' => $finalname,
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