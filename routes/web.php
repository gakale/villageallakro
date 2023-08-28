<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Offres_emploiController;
use App\Http\Controllers\PharmaciesController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\Centres_santeController;
use App\Http\Controllers\ActeursController;
use App\Http\Controllers\ActualitesController;
use App\Http\Controllers\UserController;
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

Route::get('/register', [\App\Http\Controllers\UserController::class,'showRegister'])->name('register');
Route::post('/login', [\App\Http\Controllers\UserController::class,'login'])->name('login');
Route::get('/logins', [\App\Http\Controllers\UserController::class,'showLogin'])->name('logins');
Route::post('/register', [\App\Http\Controllers\UserController::class,'register'])->name('register');


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



Route::get('/offre_emplois.create', [\App\Http\Controllers\Offres_emploiController::class,'create'])->name('offre_emplois.create');
Route::get('/offre_emplois.index', [\App\Http\Controllers\Offres_emploiController::class,'index'])->name('offre_emplois.index');
Route::get('/offre_emplois.show', [\App\Http\Controllers\Offres_emploiController::class,'show'])->name('offre_emplois.show');
// store
Route::post('/offre_emplois.store', [\App\Http\Controllers\Offres_emploiController::class,'store'])->name('offre_emplois.store');

Route::get('/voireannonce', [\App\Http\Controllers\VenteController::class,'index'])->name('voireannonce');
Route::get('/voireannonce.create', [\App\Http\Controllers\VenteController::class,'create'])->name('voireannonce.create');
Route::get('/voireannonce.show', [\App\Http\Controllers\VenteController::class,'show'])->name('voireannonce.show') ;
// store
Route::post('/voireannonce.store', [\App\Http\Controllers\VenteController::class,'store'])->name('voireannonce.store');

Route::group(['middleware' => 'auth:web,user'], function () {
    Route::get('profile', [UserController::class, 'profile'])->name('profile');

});

Route::get('/actualites', [\App\Http\Controllers\ActualitesController::class,'index'])->name('actualites');
Route::get('/actualites.create', [\App\Http\Controllers\ActualitesController::class,'create'])->name('actualites.create');
Route::get('/actualites.show', [\App\Http\Controllers\ActualitesController::class,'show'])->name('actualites.show');
// store
Route::post('/actualites.store', [\App\Http\Controllers\ActualitesController::class,'store'])->name('actualites.store');

Route::get('/pharmacie', [\App\Http\Controllers\PharmaciesController::class,'index'])->name('pharmacie');


Route::get('/centredesante', [\App\Http\Controllers\Centres_santeController::class,'index'])->name('espacesante.centredesante');

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

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

// logout route
Route::post('/logout', [\App\Http\Controllers\UserController::class,'logout'])->name('logout');
