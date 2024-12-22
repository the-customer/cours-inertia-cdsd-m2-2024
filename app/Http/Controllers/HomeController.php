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

    public function show()
    {
        return  inertia('Index/Show');
    }

    public function example()
    {
        return inertia('Index/Example');
    }
}
