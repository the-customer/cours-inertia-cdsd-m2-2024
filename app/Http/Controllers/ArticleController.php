<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title"=> "required|min:5",
            "body"=> "required|min:10",
            "image"=> "required|image|file",
            "category_id" => "required"
        ]);
        $slug = Str::slug($data['title']).'-'.date('dmYhis');
        //Engeristrer l'image dans le dossier images
        // $path = $request->file("image")->store("images","public");
        $path = $request->file("image")->storeAs("images",$slug.".jpg","public");

        //Enregistrer l'article dans la base de données
        Article::create([
            "name"          => $data["title"],
            "description"   => $data["body"],
            "image"         => $path,
            "category_id"   => $data["category_id"],
            "slug"          => $slug
        ]);
        //
        return redirect()->route("home.index")->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
