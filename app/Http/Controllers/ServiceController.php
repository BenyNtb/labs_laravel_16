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

    public function edit(Service $id)
    {
        $this->authorize('webmaster', Auth::user());
        $icones = Icone::all();
        $cards = $id;    
        return view('admin.pages.home.card', compact('cards', 'icones')); 
    }
    public function update(Request $request, Service $id)
    {
        $this->authorize('webmaster', Auth::user()); 

        $request->validate([
            "icone_id" => "required",
            "soustitre" => "required", 
            "description" => "required|max:200"
        ]);
        $cards = $id;
        // $cards->titre = '';
        $cards->icone_id  = $request->icone_id; 
        $cards->soustitre = $request->soustitre; 
        $cards->description = $request->description; 
        $cards->save(); 
        return redirect()->route('services.index', compact('cards'))->with('success', 'Cards modifié avec succès'); 
    }
}
