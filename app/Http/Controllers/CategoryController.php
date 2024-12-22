<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'categories' => Category::all()
        ];
        return inertia('Category/Index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Category/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Category::create([
        //     'name'          => 'Telephone',
        //     'slug'          => 'telephone',
        //     'description'   => 'La téléphonie mobile, ou téléphonie cellulaire est un moyen de télécommunication, plus précisément de radiocommunication, par téléphone mobile.'
        // ]);
        $data = $request->all();
        //add slug:
        $data['slug'] = Str::slug($data['name']);
        Category::create($data);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $category = Category::where('id', $id)->first();
        $data = [
            'category'  => Category::find($id)
        ];
        return inertia('Category/Show',$data);
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
