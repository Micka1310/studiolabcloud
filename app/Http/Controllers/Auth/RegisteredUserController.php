<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\utilisateurs;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Closure;
/*
use Validator;
use NoCaptcha\Facades\NoCaptcha;*/

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        if (Auth::check())
        {
            // Si un utilisateur est déja connecter et que l'on force
            // à revenir dans la page de connexion sans se déconnecter,
            // on est rediriger vers la page d'accueil
            return view('welcome');
        }

        return view('studiolabcloud/studiolab_connexion_inscription_v2');


        //return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            //'name' => ['required', 'string', 'max:255'],

            'prenom' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.utilisateurs::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            'age_confirmation' => ['accepted'],
            'g-recaptcha-response' => 'recaptcha',
            //['required', 'captcha',],


//            'g-recaptcha-response' =>
  //          ['required', 'captcha',
            /*
            function (string $attribute, mixed $value, Closure $fail)
            {
                $g_response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify",
                [
                    'secret' => config('services.recaptcha.secret_key'),
                    'response' => $value,
                    'remoteip' => \request()->ip()
                ]);

                if (!$g_response->json('success'))
                {
                    $fail("The {$attribute} is invalid.");
                }
            },*/
//            ],
        ]);

        /*
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }*/

        $user = utilisateurs::create([
            //'name' => $request->name,

            'prenom' => $request->prenom,
            'nom' => $request->nom,

            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
