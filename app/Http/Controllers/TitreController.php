<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TitreController extends Controller
{
    
    public function index()
    {
        $this->authorize('webmaster', Auth::user()); 
        $titres = Titre::all();
        $titreDiscover = Titre::find(1);
        $titreService = Titre::find(2);
        $titreTeam = Titre::find(3);
        return view('admin.pages.home.titres', compact('titres', 'titreDiscover', 'titreService', 'titreTeam' )); 
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Titre $titre)
    {
        
    }


    public function edit(Titre $titre)
    {
        $this->authorize('webmaster', Auth::user()); 
        return view('admin.pages.home.editTitre', compact('titre'));
    }

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

    
    public function destroy(Titre $titre)
    {
        
    }
}
