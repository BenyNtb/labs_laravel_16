<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Service;
use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titres = Titre::all();
        $services = Service::all();
        return view('admin.pages.home.discover', compact('titres', 'services'));
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
    public function store(Request $request, Discover $discover)
    {
        $this->authorize('webmaster', Auth::user());

        $request->validate([
            "titre" => "required",
            "description" => "required|max:200"
        ]);
        $discover->titre = $request->stitre; 
        $discover->description = $request->description; 
        $discover->save();
        return redirect()->route('discover.index')->with('success', 'Modification Service effectuée avec succès !'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function show(Discover $discover)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function edit(Discover $id )
    {
        $discover = $id;
        $this->authorize('webmaster', Auth::user()); 
        return view('admin.pages.home.editDiscover', compact('discover')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discover $discover)
    {
        $this->authorize('webmaster', Auth::user()); 

        $request->validate([
            "titre" => "required",
            "description" => "required"
        ]);
        $discover->titre = '';
        $discover->description = $request->description; 
        $discover->save(); 

        return redirect()->route('homediscover.index')->with('success', 'Modification Service effectuée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discover $discover)
    {
        //
    }
}
