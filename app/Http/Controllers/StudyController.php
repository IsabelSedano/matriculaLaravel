<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function index($page = 1)
    {
        //echo 'Estamos en index, pagina ' . $page;
        return view('study/index', ['page' => $page]);
    }

    public function delete($id)
    {
        //return "Borrando la matricula con id $id";
        return view('study/delete');
    }

    public function new()
    {
        return view('study/new');
    }
    public function insert()
    {
        return view('study/insert');
    }
    public function update()
    {
        return view('study/update');
    }
    public function edit($id)
    {
        return view('study/edit');
    }


}
