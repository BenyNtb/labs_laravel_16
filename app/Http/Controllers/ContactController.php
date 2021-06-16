<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactSujet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('webmaster', Auth::user()); 
        $contacts = Contact::all();
        $sujets = ContactSujet::all();
        return view('admin.contact.index', compact('contacts', 'sujets'));
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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $this->authorize('webmaster', Auth::user()); 
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $this->authorize('webmaster', Auth::user()); 
        request()->validate([
            "position"=> ["required", "min:3"],
            "titre"=> ["required", "min:3"],
            "description"=> ["required", "min:5"],
            "soustitre"=> ["required", "min:3"],
            "adresse1"=> ["required", "min:3"],
            "adresse2"=> ["required", "min:3"],
            "telephone"=> ["required", "min:3"],
            "mail"=> ["required", "min:3"],
            "footer"=> ["required", "min:3"],
        ]);
        $contact->position = $request->position;
        $contact->titre = $request->titre;
        $contact->description = $request->description;
        $contact->soustitre = $request->soustitre;
        $contact->adresse1 = $request->adresse1;
        $contact->adresse2 = $request->adresse2;
        $contact->telephone = $request->telephone;
        $contact->mail = $request->mail;
        $contact->footer = $request->footer;
        $contact->save();


        return redirect()->route('contact.index')->with('success', 'Page contact a été actualisée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
