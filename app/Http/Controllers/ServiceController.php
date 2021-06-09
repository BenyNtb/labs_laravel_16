<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('webmaster', Auth::user());
        $services = Service::paginate(6)->fragment('servicePaginate');
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Service $service)
    {
        $this->authorize('webmaster', Auth::user());

        $request->validate([
            "icone" => "required",
            "soustitre" => "required",
            "description" => "required|max:200"
        ]);
        $service->icone = $request->icone; 
        $service->soustitre = $request->soustitre; 
        $service->description = $request->description; 
        $service->save();
        return redirect()->route('service.index')->with('success', 'Modification Service effectuée avec succès !'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $this->authorize('webmaster', Auth::user()); 
        return view('admin.services.edit', compact('service')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize('webmaster', Auth::user()); 

        $request->validate([
            "icone" => "required",
            "soustitre" => "required", 
            "description" => "required|max:200"
        ]);
        $service->icone  = $request->icone; 
        $service->soustitre = $request->soustitre; 
        $service->description = $request->description; 
        $service->save(); 

        return redirect()->route('service.index')->with('success', 'Modification Service effectuée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize('webmaster', Auth::user());
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Service bien supprimé'); 
    }
}
