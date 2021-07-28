<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view('categories.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categorie' => 'required|string|',
            'icone' => 'required|image|',
        ]);
        $image = request('icone')->store('uploads', 'public');
        Categories::create([
            'categorie' => request('categorie'),
            'icone' => $image
        ]);
        return redirect()->intended('categories')->with('success', 'La catégorie a été ajouté avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::find($id);
        return view('categories.edit', compact('categories'));
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'categorie' => 'required|string|',
            'icone' => '|image|',
        ]);
        $categories = Categories::find($id);
        $categories->categorie =  $request->get('categorie');
        $categories->save();

        return redirect()->intended('categories')->with('success', 'La modification a été effectué avec succes');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($categories)
    {
        $categories = Categories::find($categories);
        $categories->delete();
        return redirect('categories')->with('success', 'La suppression a été effectué avec succes');;
    }
}
