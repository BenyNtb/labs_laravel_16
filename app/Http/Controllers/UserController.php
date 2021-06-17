<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Genre;
use App\Models\Poste;
use App\Models\Role;
use App\Models\Service;
use App\Models\Titre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $homes1 = Titre::all();
        $homes2 = Discover::all();
        $homes3 = Service::all();
        return view('admin.user.main', compact('users', 'homes1', 'homes2', 'homes3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin', Auth::user());
        $roles = Role::all();
        $postes = Poste::all();
        $genres = Genre::all();
        return view('admin.user.create', compact('roles', 'postes', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin', Auth::user());
        $request->validate([
            "nom" => "required",
            "email" => "required",
            "img" => "required",
        ]);
        $user = new User();
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->role_id = $request->role;
        $user->poste_id = $request->poste;
        $user->genre_id = $request->genre;

        $request->file('img')->storePublicly('img/', 'public');
        $user->img = $request->file('img')->hashName();

        $user->password = Hash::make('user2021');
        $user->save();
        return redirect()->back()->with('success', "Utilisateur a été ajouté");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $roles = Role::all();
        $postes = Poste::all();
        return view('admin.user.edit', compact('users', 'roles', 'postes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request)
    {
        $this->authorize('admin');
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string',
            'poste_id' => 'required',
        ]);
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->poste_id = $request->poste_id;
        if ($request->has('roleUpdate')) {
            $request->validate([
                "role_id" => ["required"]
            ]);
            $user->role_id = $request->role_id;
            $user->save();
            return redirect()->back()->with('success', 'Profil modifié');
        }
    }
    public function updateMembre(User $user, Request $request)
    {
        $this->authorize('user', $user);
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string',
            'poste_id' => 'required',
        ]);
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->poste_id = $request->poste_id;
        $user->save();

        return redirect()->back()->with('success', 'Profil modifié');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        // $this->authorize('isAdmin');
        $id->delete();
        return redirect()->route('user.index')->with('warning', 'Utilisateur supprimé');
    }
}
