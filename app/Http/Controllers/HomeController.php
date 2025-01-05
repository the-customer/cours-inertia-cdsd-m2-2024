<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'categories' => Category::orderBy('name')->get(),
            'articles' => Article::orderBy('created_at','desc')->get(),
        ];

        return  inertia('Index/Index',$data);
    }

}
