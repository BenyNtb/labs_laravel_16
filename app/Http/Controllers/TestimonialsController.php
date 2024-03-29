<?php

namespace App\Http\Controllers;

use App\Models\Icone;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('webmaster', Auth::user());
        $testimonials = Testimonials::all();
        return view('admin.pages.home.testimonials', compact('testimonials'));
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
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonials $id)
    {
        $testimonials = $id;
        $this->authorize('webmaster', Auth::user());
        return view('admin.pages.home.editTestimonial', compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonials $testimonials)
    {
        $this->authorize('webmaster', Auth::user());

        $request->validate([
            "nom" => "required",
            "avis" => "required",
            "photo" => "required"
        ]);
        $testimonials->nom = $request->nom;
        $testimonials->avis = $request->avis;
        $testimonials->photo = $request->photo;
        $testimonials->save();

        return redirect()->route('testimonials.index')->with('success', 'Modification Service effectuée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonials $testimonials)
    {
        $testimonials->delete();
        return redirect()->back()->with('success', 'Testimonials supprimé');
    }
}
