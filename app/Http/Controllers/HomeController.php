<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $names = ['Toto','Tata','Titi'];


        return  inertia('Index/Index',[
            'noms'  => $names,
            'info' => 'Voici une info'
        ]);
    }

}
