<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function list()
    {
        $todos = [
            'Faire du sport',
            'Faire mes exercices de Vue js',
            'Faire quelques minutes de sieste',
            'Faire a manger',
            'Aller au marcher'
        ];
        // $todos = 12;
        // return inertia('Todo/index',[
        //     'todos'     => $todos
        // ]);

        // return view('Todo/index',compact('todos'));
        return inertia('Todo/index',compact('todos'));
    }
}
