<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('webmaster', Auth::user()); 
        $titres = Titre::all();
        $titreDiscover = Titre::find(1);
        $titreService = Titre::find(2);
        $titreTeam = Titre::find(3);
        return view('admin.pages.home.titres', compact('titres', 'titreDiscover', 'titreService', 'titreTeam' )); 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
        $this->authorize('webmaster', Auth::user()); 
        return view('admin.pages.home.editTitre', compact('titre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre)
    {
        $this->authorize('webmaster', Auth::user()); 
        $request->validate([
            "titreDiscover" => "required",
            "titreService" => "required",
            "titreTeam" => "required",
        ]);
        $titre->titreDiscover = $request->titreDiscover; 
        $titre->titreService = $request->titreService;
        $titre->titreTeam = $request->titreTeam;
        $titre->save(); 

        return redirect()->route('titre.index')->with('success', 'Le titre a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        //
    }
}
