<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\utilisateurs;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        Log::info('Demande de réinitialisation de mot de passe reçue', ['email' => $request->email]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
/*
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
*/



        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
/*
        $user = utilisateurs::where('email', $request->email)->first();

        // Si l'utilisateur n'a pas mis le bon adresse mail
        if (!$user) {
            return back()->withInput($request->only('email'))->withErrors([
                'email' => 'Nous ne trouvons pas d\'utilisateur avec cette adresse email.'
            ]);
        }

        // Met à jour le mot de passe de l'utilisateur
        $user->password = Hash::make($request->password);
        $user->setRememberToken(Str::random(60)); // Optionnel, pour régénérer le remember token

        $user->save();

        // Déclenche l'événement de réinitialisation de mot de passe
        event(new PasswordReset($user));

        return redirect()->route('login')->with('status', 'Votre mot de passe a été réinitialisé avec succès.');*/

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                Log::info('Utilisateur trouvé pour réinitialisation', ['user' => $user]);

                // Utilisez le modèle personnalisé pour mettre à jour le mot de passe
                $utilisateur = utilisateurs::where('email', $user->email)->first();
                if ($utilisateur)
                {
                    Log::info('Mise à jour du mot de passe pour l\'utilisateur', ['utilisateur' => $utilisateur]);

                    $utilisateur->forceFill([
                        'password' => Hash::make($request->password),
                        'remember_token' => Str::random(60),
                    ])->save();

                    event(new PasswordReset($utilisateur));
                }

                else
                {
                    Log::warning('Utilisateur non trouvé dans le modèle personnalisé', ['email' => $user->email]);
                }
            }
        );

        Log::info('Statut de la réinitialisation du mot de passe', ['status' => $status]);

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withInput($request->only('email'))
                    ->withErrors(['email' => __($status)]);
    }
}
