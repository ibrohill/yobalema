<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\EvaluationChauffeurController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CamionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[AcceuilController::class,'index'])->name('Acceuil');
Route::get('/aide',[AcceuilController::class,'aide'])->name('Aide');
Route::get('/plan',[AcceuilController::class,'plan'])->name('Plan');

Route::get('/voiture',[VoitureController::class,'Voiture'])->name('Voiture');
Route::get('/ajouter',[VoitureController::class,'Ajouter'])->name('ajouter');
Route::post('/ajouter/traitement', [VoitureController::class, 'ajoutTraitement']);
Route::delete('/voitures/{id}', [VoitureController::class,'destroy'])->name('voiture.destroy');
Route::get('/voiture/{id}/modifier', [VoitureController::class,'modifier'])->name('voiture.modifier');
Route::put('/voiture/{id}', [VoitureController:: class,'update'])->name('voiture.update');

Route::get('/Camion',[CamionController::class,'index'])->name('Camion');
Route::get('/ajouterCamion',[CamionController::class,'AjouterCamion'])->name('ajouterCamion');
Route::post('/ajouter/traitementCamion', [CamionController::class, 'ajoutTraitementCamion']);
Route::delete('/Camion/{id}', [CamionController::class,'destroy'])->name('Camion.destroy');

Route::get('/chauffeur/{id}/modifier', [ChauffeurController::class, 'modifier'])->name('chauffeur.modifier');
Route::put('/chauffeur/{id}/update', [ChauffeurController::class, 'update'])->name('chauffeur.update');

Route::get('/chauffeur',[ChauffeurController::class,'Chauffeur'])->name('Chauffeur');
Route::get('/ajouterChauffeur', [ChauffeurController::class, 'AjouterChauffeur'])
    ->middleware('admin')
    ->name('ajouterChauffeur');
Route::delete('/chauffeurs/{id}', [ChauffeurController::class,'destroy'])->name('chauffeur.destroy');

Route::post('/ajouter/traitementChauffeur', [ChauffeurController::class, 'ajoutTraitementChauffeur']);

Route::post('/ajouter/Traitementlocation', [AcceuilController::class, 'ajoutTraitementlocation'])->name('Location.store');


Route::get('/client', [EvaluationChauffeurController::class, 'showEvaluationForm'])->middleware(['auth', 'verified'])->name('client');
Route::post('/client/evaluerChauffeur', [EvaluationChauffeurController::class, 'evaluerChauffeur'])->name('evaluerChauffeur');

Route::get('/reservation/create/{voiture_id}', [ReservationController::class, 'create'])->middleware(['auth', 'verified'])->name('reservation.create');
Route::get('/reservation/create/{camion_id}', [ReservationController::class, 'create'])->middleware(['auth', 'verified'])->name('reservationCamion.create');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/tarification/{reservation_id}', [ReservationController::class, 'tarification'])->name('tarification');

Route::get('/prix', [AcceuilController::class, 'nos_Prix'])->name('prix');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
