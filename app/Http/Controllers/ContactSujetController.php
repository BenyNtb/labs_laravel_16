<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactSujet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactSujetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

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
     * @param  \App\Models\ContactSujet  $contactSujet
     * @return \Illuminate\Http\Response
     */
    public function show(ContactSujet $contactSujet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactSujet  $contactSujet
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactSujet $contactSujet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactSujet  $contactSujet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactSujet $contactSujet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactSujet  $contactSujet
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactSujet $contactSujet)
    {
        //
    }
}
