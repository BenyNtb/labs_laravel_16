<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Poste;
use App\Models\Role;
use App\Models\Service;
use App\Models\Titre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $roles = Role::all();
        $postes = Poste::all();
        return view('admin.user.edit', compact('user', 'roles', 'postes'));
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
            return redirect()->back()->with('success', 'Profil bien modifié');
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

        return redirect()->back()->with('success', 'Profil bien modifié');
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
        return redirect()->route('user.index')->with('warning', 'Utilisateur bien supprimé');
    }
}

