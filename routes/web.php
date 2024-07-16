<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentification;
use App\Http\Controllers\accueil;




// Route menant à l'accueil
Route::get('/', function ()
{
    return view('studiolabcloud/studiolab_accueil_v3');
    //return view('studiolabcloud/welcome');
})->name('studiolabcloud_accueil');


// Route menant à la page virtuelle
Route::get('/machines_virtuelles', function ()
{
    return view('studiolabcloud/studiolab_machine_virtuelle_v2');
    //return view('studiolabcloud/welcome');
})->name('machine_virtuelle');


// Route depuis le tableau de bord
Route::get('/tableau_bord_principal', function ()
{
    return view('studiolabcloud/tableau_bord_principal');
    //return view('studiolabcloud/welcome');
})->name('tableau_bord_principal');

Route::get('/tableau_bord_client', function()
{
    return view('studiolabcloud/tableau_bord_client');
})->name('tableau_bord_client');

Route::get('/tableau_bord_paiement', function()
{
    return view('studiolabcloud/tableau_bord_paiement');
})->name('tableau_bord_paiement');

Route::get('/tableau_bord_mail', function()
{
    return view('studiolabcloud/tableau_bord_mail');
})->name('tableau_bord_mail');



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
    return view('studiolabcloud/tableau_bord_principal');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
