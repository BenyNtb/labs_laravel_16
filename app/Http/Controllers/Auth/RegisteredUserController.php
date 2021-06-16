<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterSender;
use App\Mail\WelcomeSender;
use App\Models\Genre;
use App\Models\Photo;
use App\Models\Poste;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $genres = Genre::all();
        $postes = Poste::all();
        return view('auth.register', compact('genres', 'postes'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'genre' => 'required|integer|max:255',
            'photo' => 'required',
            'poste' => 'required|integer|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $photo = new Photo();
        $request->file('photo')->storePublicly('img/team/', 'public');
        $photo->src = $request->file('photo')->hashName();
        $photo->save();

        $user = User::create([
            'nom' => $request->nom,
            'role_id' => 4,
            'photo_id' => $photo->id,
            'genre_id' => $request->genre,
            'poste_id' => $request->poste,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'validate' => 0,
        ]);



        Mail::to($request->email)->send(new WelcomeSender($request, $user));
        event(new Registered($user));

        Auth::login($user);


        return redirect(RouteServiceProvider::HOME);
    }
}
