<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentification;
use App\Http\Controllers\accueil;




// URL menant à l'accueil
Route::get('/', function ()
{
    return view('studiolabcloud/studiolab_accueil_v3');
    //return view('studiolabcloud/welcome');
});

/*
Route::get('/accueil', [accueil::class, 'accueil'])->name('accueil');
Route::get('/deconnexion', [authentification::class, 'deconnexion'])->name('deconnexion');
*/

// URL menant vers la page de connexion/inscription
/*
Route::get('/authentification', [authentification::class, 'authentification'])->name('authentification');    // ['nomm de classe', 'nom de la fonction']
Route::post('/connexion', [authentification::class, 'connexion'])->name('connexion');
*/
//Route::post('/inscription', [authentification::class, 'inscription'])->name('inscription');


Route::get('/dashboard', function () {
    return view('studiolabcloud/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
