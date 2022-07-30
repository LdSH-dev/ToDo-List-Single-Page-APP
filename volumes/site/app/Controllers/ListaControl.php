<?php

namespace App\Controllers;

use App\Models\Lista;


class ListaControl extends BaseController
{   
    public function index()
    {   
        $listaModel    = new Lista();
        $data['listas'] = $listaModel->getListas();

        return view('ToDo_List', $data);
    }
}