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

    public function insertLista()
    {   
        if ($this->request->isAJAX())
        {   
            $data['name'] = $this->request->getPost('name');
            $listaModel   = new Lista();
            $result = $listaModel->insert($data);

            return json_encode($result);
        }
    }

    public function deleteLista()
    {
        if ($this->request->isAJAX())
        {
            $id = $this->request->getPost('id');
            
            $listModel = new Lista();
            $result = $listModel->deleteLista($id);

            return json_encode($result);
        }
    }

    public function editLista()
    {
        if ($this->request->isAJAX())
        {
            $id   = $this->request->getPost('id');
            $name = $this->request->getPost('name');

            $data['name'] = $name;

            $listModel = new Lista();
            $result = $listModel->update($id, $data);

            return json_encode($result);
        }
    }
}