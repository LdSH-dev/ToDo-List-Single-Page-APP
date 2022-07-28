<?php

namespace App\Controllers;

class ToDo extends BaseController
{
    public function index()
    {
        return view('ToDo_List');
    }
}