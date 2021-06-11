<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.pages.home.team', compact('teams'));
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
    public function store(Request $request, Team $teams)
    {
        $this->authorize('webmaster', Auth::user());

        $request->validate([
            "titre" => "required",
            "nom" => "required",
            "photo" => "required",
            "poste" => "required"
        ]);
        $teams->titre = $request->titre;
        $teams->nom = $request->nom;
        $teams->photo = $request->photo;
        $teams->poste = $request->poste;  
        $teams->save();
        return redirect()->route('team.index')->with('success', 'Modification Service effectuée avec succès !'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $id)
    {
        $teams = $id;
        $this->authorize('webmaster', Auth::user()); 
        return view('admin.pages.home.editTeam', compact('teams')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $teams)
    {
        $this->authorize('webmaster', Auth::user()); 

        $request->validate([
            "titre" => "required",
            "nom" => "required",
            "photo" => "required",
            "poste" => "required"
        ]);
        $teams->titre = $request->titre;
        $teams->nom = $request->nom;
        $teams->photo = $request->photo;
        $teams->poste = $request->poste;  
        $teams->save(); 

        return redirect()->route('team.index')->with('success', 'Modification Service effectuée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
