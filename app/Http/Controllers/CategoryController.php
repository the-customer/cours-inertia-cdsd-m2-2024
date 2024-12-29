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
        //validate the request
        $data = $request->validate([
            // 'name' => ['required','string','max:25','min:3'],
            'name'          => 'required|string|max:25|min:3',
            'description'   => 'required|string|max:500|min:25',
        ],[
            'name.required' => 'Le nom est obligatoire!',
            'name.string'   => 'Le nom doit etre une chaine de caractere!',
            'name.max'      => 'Le nom ne doit pas depasser 25 caracteres!',
            'name.min'      => 'Le nom doit avoir au moins 3 caracteres!',
            'description.required' => 'La description est obligatoire!',
            'description.string'   => 'La description doit etre une chaine de caractere!',
            'description.max'      => 'La description ne doit pas depasser 500 caracteres!',
            'description.min'      => 'La description doit avoir au moins 25 caracteres!',
        ]);

        //add slug:
        $data['slug'] = Str::slug($data['name']).'-'.date('dmYhis');
        Category::create($data);

        return redirect()->route('categories.index')->with('success','La categorie est enregistree aves succces!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        // $category = Category::where('id', $id)->first();
        $data = [
            'category'  => Category::where('slug', $slug)->firstOrFail(),
        ];
        return inertia('Category/Show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $data = [
            'category' => Category::where('slug', $slug)->firstOrFail()
        ];
        return inertia('Category/Edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $newData = $request->validate([
            'name'          => 'required|string|max:25|min:3',
            'description'   => 'required|string|max:500|min:25',
        ],[
            'name.required' => 'Le nom est obligatoire!',
            'name.string'   => 'Le nom doit etre une chaine de caractere!',
            'name.max'      => 'Le nom ne doit pas depasser 25 caracteres!',
            'name.min'      => 'Le nom doit avoir au moins 3 caracteres!',
            'description.required' => 'La description est obligatoire!',
            'description.string'   => 'La description doit etre une chaine de caractere!',
            'description.max'      => 'La description ne doit pas depasser 500 caracteres!',
            'description.min'      => 'La description doit avoir au moins 25 caracteres!',
        ]);

        //Recuperer la categorie a modifier
        $oldData = Category::where('slug',$slug)->first();
        // $oldData->update($newData);
        $oldData->name = $newData['name'];
        $oldData->description = $newData['description'];
        $oldData->slug = Str::slug($newData['name']).'-'.date('dmYhis');
        $oldData->save();
        return redirect()->route('categories.index')->with('success','La categorie a ete modifie avec succes!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
