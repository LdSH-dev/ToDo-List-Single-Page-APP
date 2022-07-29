<?php

namespace App\Controllers;

use App\Models\ToDoList;

class ToDo extends BaseController
{   
    public function index()
    {   
        $todoModel    = new ToDoList();
        $data['todo'] = $todoModel->findAll();

        return view('ToDo_List', $data);
    }
}