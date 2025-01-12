<?php

namespace App\Http\Controllers;

use App\Authors;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auteurs = Authors::all();
        return view('authors.authors',compact('auteurs'));
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
            'nom' => 'required|string|',
            'prenom' => 'required|string|'

        ]);
        Authors::create([
            'nom' =>request('nom'),
            'prenom' =>request('prenom')
        ]);
        return redirect()->intended('authors')->with('success',"L'auteur a été ajouté avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function show(Authors $authors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auteurs = Authors::find($id);
        return view('authors.edit',compact('auteurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|',
            'prenom' => 'required|string|',
        ]);
        $auteurs = Authors::find($id);
        $auteurs->nom =  $request->get('nom');
        $auteurs->prenom =  $request->get('prenom');
        $auteurs->save();

        return redirect()->intended('authors')->with('success', 'La modification a été effectué avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function destroy( $auteurs)
    {
        $auteurs = Authors::find($auteurs);
        $auteurs->delete();
        return redirect('authors')->with('success', 'La suppression a été effectué avec succes');
    }
}
