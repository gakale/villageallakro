<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Offres_emploiController;
use App\Http\Controllers\VenteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/index-2', function () {
    return view('index-2');
})->name('index-2');

Route::get('/presentation', function () {
    return view('presentation');
})->name('presentation');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/archive-grid', function () {
    return view('archive-grid');
})->name('archive-grid');

Route::get('/archive-list', function () {
    return view('archive-list');
})->name('archive-list');

Route::get('/single-post', function () {
    return view('single-post');
})->name('single-post');

Route::get('/typography', function () {
    return view('typography');
})->name('typography');

Route::get('/video-post', function () {
    return view('video-post');
})->name('video-post');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/offre_emplois.create', [\App\Http\Controllers\Offres_emploiController::class,'create'])->name('offre_emplois.create');
Route::get('/offre_emplois.index', [\App\Http\Controllers\Offres_emploiController::class,'index'])->name('offre_emplois.index');
Route::get('/offre_emplois.show', [\App\Http\Controllers\Offres_emploiController::class,'show'])->name('offre_emplois.show');
// store
Route::post('/offre_emplois.store', [\App\Http\Controllers\Offres_emploiController::class,'store'])->name('offre_emplois.store');

Route::get('/espacevente.publierannonce', [\App\Http\Controllers\VenteController::class,'create'])->name('espacevente.publierannonce');
Route::get('/espacevente.voirannonce', [\App\Http\Controllers\VenteController::class,'index'])->name('espacevente.voirannonce');
Route::get('/espacevente.publierannonce', [\App\Http\Controllers\VenteController::class,'show'])->name('espacevente.publierannonce');


Route::get('/actualite', function () {
    return view('actualite/actualite');
})->name('actualite/actualite');


Route::get('/nouvelleoffre-demande', function () {
    return view('offredemploi/nouvelleoffre-demande');
})->name('offredemploi/nouvelleoffre-demande');

Route::get('/pharmacie', function () {
    return view('espacesante/pharmacie');
})->name('espacesante/pharmacie');

Route::get('/espacesante', function () {
    return view('espacesante/espacesante');
})->name('espacesante/espacesante');

Route::get('/centredesante', function () {
    return view('espacesante/centredesante');
})->name('espacesante/centredesante');

Route::get('/maladiesepidemies', function () {
    return view('espacesante/maladiesepidemies');
})->name('espacesante/maladiesepidemies');

Route::get('/acteurs', function () {
    return view('acteurs/acteurslist');
})->name('acteurs/acteurslist');

Route::get('/centredinteret', function () {
    return view('acteurs/centredinteret');
})->name('acteurs/centredinteret');

Route::get('/centrescommerciaux', function () {
    return view('acteurs/centrescommerciaux');
})->name('acteurs/centrescommerciaux');

Route::get('/competences', function () {
    return view('acteurs/competences');
})->name('acteurs/competences');

Route::get('/amenagement-demenagement', function () {
    return view('actualite/amenagement-demenagement');
})->name('actualite/amenagement-demenagement');

Route::get('/naissance-deces', function () {
    return view('actualite/naissance-deces');
})->name('actualite/naissance-deces');

Route::get('/projetdemairie', function () {
    return view('actualite/projetdemairie');
})->name('actualite/projetdemairie');

Route::get('/demenagement1', function () {
    return view('articles\amenagement-demenagement\demenagement1');
})->name('demenagement1');
