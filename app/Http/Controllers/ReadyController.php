<?php

namespace App\Http\Controllers;

use App\Models\Ready;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReadyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('webmaster', Auth::user()); 
        $readies = Ready::all();
        return view('admin.pages.home.ready', compact('readies')); 
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
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function show(Ready $ready)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function edit(Ready $ready)
    {
        $this->authorize('webmaster', Auth::user()); 
        return view('admin.pages.home.editReady', compact('ready'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ready $ready)
    {
        $this->authorize('webmaster', Auth::user()); 
        $request->validate([
            "titre" => "required",
            "texte" => "required",
        ]);
        $ready->titre = $request->titre; 
        $ready->texte = $request->texte;
        $ready->save(); 

        return redirect()->route('ready.index')->with('success', 'Modification reussi'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ready $ready)
    {
        //
    }
}
