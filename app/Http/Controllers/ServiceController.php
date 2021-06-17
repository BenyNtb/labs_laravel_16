<?php

namespace App\Http\Controllers;

use App\Models\Icone;
use App\Models\Service;
use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
    $this->authorize('webmaster', Auth::user());
    $services = Service::paginate(3);
    $icones = Icone::all();    
    return view('admin.services.index', compact('services', 'icones'));
    }

    public function edit(Service $service)
    {
        $this->authorize('webmaster', Auth::user());
        $icones = Icone::all();
  
        return view('admin.services.edit', compact('service', 'icones')); 
    }
    public function update(Request $request, Service $service)
    {
        $this->authorize('webmaster', Auth::user()); 

        $request->validate([
            "icone_id" => "required",
            "soustitre" => "required", 
            "description" => "required|max:200"
        ]);

        // $cards->titre = '';
        $service->icone_id  = $request->icone_id; 
        $service->soustitre = $request->soustitre; 
        $service->description = $request->description; 
        $service->save(); 
        return redirect()->route('services.index')->with('success', 'Cards modifié avec succès'); 
    }
}
