<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


 
    Route::post('login', 'ApiController@login');
    Route::post('register', 'ApiController@register');  
   
Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('logout', 'ApiController@logout');


    //Route::resource('/Joueurs', 'JoueurController');
});

    
Route::get('joueurs', 'JoueurController@index')->name("tous_joueurs");
Route::get('joueur/{id}', 'JoueurController@show')->name("joueur");
Route::post('joueur', 'JoueurController@store')->name("create_joueur");
Route::put('joueur/{id}', 'JoueurController@update')->name("update_joueur");
Route::delete('joueur/{id}', 'JoueurController@destroy')->name("deleted_joueur");


Route::get('comp', 'CompetitionController@index')->name("tous_comp");
Route::get('comp/{id}', 'CompetitionController@show')->name("comp");
Route::post('comp', 'CompetitionController@store')->name("create_comp");
Route::put('comp/{id}', 'CompetitionController@update')->name("update_comp");
Route::delete('comp/{id}', 'CompetitionController@destroy')->name("deleted_comp");




Route::get('contacts', 'ContactController@index')->name("tous_contacts");
Route::get('contact/{id}', 'ContactController@show')->name("contact");
Route::post('contact', 'ContactController@store')->name("create_contact");
Route::put('contact/{id}', 'ContactController@update')->name("update_contact");
Route::delete('contact/{id}', 'ContactController@destroy')->name("deleted_contact");

Route::get('adresses', 'AdressesController@index')->name("tous_adresses");
Route::get('adresse/{id}', 'AdressesController@show')->name("adresse");
Route::post('adresse', 'AdressesController@store')->name("create_adresse");
Route::put('adresse/{id}', 'AdressesController@update')->name("update_adresse");
Route::delete('adresse/{id}', 'AdressesController@destroy')->name("deleted_adresse");


Route::get('posts', 'PostController@index')->name("tous_post");
Route::get('post/{id}', 'PostController@show')->name("post");
Route::post('post', 'PostController@store')->name("create_post");
Route::put('post/{id}', 'PostController@update')->name("update_post");
Route::delete('post/{id}', 'PostController@destroy')->name("deleted_post");

Route::get('performances', 'PerformanceController@index')->name("tous_performance");
Route::get('performance/{id}', 'PerformanceController@show')->name("performance");
Route::post('performance', 'PerformanceController@store')->name("create_performance");
Route::put('performance/{id}', 'PerformanceController@update')->name("update_performance");
Route::delete('performance/{id}', 'PerformanceController@destroy')->name("deleted_performance");

Route::get('suspendus', 'SuspendusController@index')->name("tous_suspendus");
Route::get('suspendu/{id}', 'SuspendusController@show')->name("suspendu");
Route::post('suspendu', 'SuspendusController@store')->name("create_suspendu");
Route::put('suspendu/{id}', 'SuspendusController@update')->name("update_suspendu");
Route::delete('suspendu/{id}', 'SuspendusController@destroy')->name("deleted_suspendu");



Route::get('blesseurs', 'SuspendusController@index')->name("blesseurs");
Route::get('blesseur/{id}', 'SuspendusController@show')->name("blesseur");
Route::post('blesseur', 'SuspendusController@store')->name("create_blesseur");
Route::put('blesseur/{id}', 'SuspendusController@update')->name("update_blesseur");
Route::delete('blesseur/{id}', 'SuspendusController@destroy')->name("deleted_blesseur");

Route::get('matches', 'MatchController@index')->name("matches");
Route::get('match/{id}', 'MatchController@show')->name("match");
Route::post('match', 'MatchController@store')->name("match");
Route::put('match/{id}', 'MatchController@update')->name("update_match");
Route::delete('match/{id}', 'MatchController@destroy')->name("deleted_match");

Route::get('equipes', 'EquipeController@index')->name("equipes");
Route::get('equipe/{id}', 'EquipeController@show')->name("equipe");
Route::post('equipe', 'EquipeController@store')->name("create_equipe");
Route::put('equipe/{id}', 'EquipeController@update')->name("update_equipe");
Route::delete('equipe/{id}', 'EquipeController@destroy')->name("deleted_equipe");


Route::get('exercices', 'ExerciceController@index')->name("exercices");
Route::get('exercice/{id}', 'ExerciceController@show')->name("exercice");
Route::post('exercice', 'ExerciceController@store')->name("create_exercice");
Route::put('exercice/{id}', 'ExerciceController@update')->name("update_exercice");
Route::delete('exercice/{id}', 'ExerciceController@destroy')->name("deleted_exercice");


Route::get('categories', 'CategorieController@index')->name("categories");
Route::get('categorie/{id}', 'CategorieController@show')->name("categorie");
Route::post('categorie', 'CategorieController@store')->name("create_categorie");
Route::put('categorie/{id}', 'CategorieController@update')->name("update_categorie");
Route::delete('categorie/{id}', 'CategorieController@destroy')->name("deleted_categorie");

Route::get('familles', 'FamilleController@index')->name("familles");
Route::get('famille/{id}', 'FamilleController@show')->name("famille");
Route::post('famille', 'FamilleController@store')->name("create_famille");
Route::put('famille/{id}', 'FamilleController@update')->name("update_famille");
Route::delete('famille/{id}', 'FamilleController@destroy')->name("deleted_famille");


Route::get('scolaires', 'ScolaireController@index')->name("scolaires");
Route::get('scolaire/{id}', 'ScolaireController@show')->name("scolaire");
Route::post('scolaire', 'ScolaireController@store')->name("create_scolaire");
Route::put('scolaire/{id}', 'ScolaireController@update')->name("update_scolaire");
Route::delete('scolaire/{id}', 'ScolaireController@destroy')->name("deleted_scolaire");
