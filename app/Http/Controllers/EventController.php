<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "Diego";
        $idade = 23;
        $sexo = "Masculino";
        $arr = [10, 20, 30, 40, 50];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade2' => $idade,
                'sexo' => $sexo,
                'arr' => $arr,
            ]
        );
    }
    public function create(){
        return view('events.create');
    }
}
