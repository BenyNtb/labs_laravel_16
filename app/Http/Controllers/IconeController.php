<?php

namespace App\Http\Controllers;

use App\Models\Icone;
use App\Models\Logo;
use App\Models\User;
use Illuminate\Http\Request;

class IconeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $icones = Logo::all();
        return view('admin.pages.home.card', compact('users', 'icones'));
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
     * @param  \App\Models\Icone  $icone
     * @return \Illuminate\Http\Response
     */
    public function show(Icone $icone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Icone  $icone
     * @return \Illuminate\Http\Response
     */
    public function edit(Icone $icone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Icone  $icone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Icone $icone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Icone  $icone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Icone $icone)
    {
        //
    }
}
