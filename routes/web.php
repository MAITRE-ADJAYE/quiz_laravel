<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Discipline; // Import de la classe Discipline
use App\Models\Competences; // Import de la classe Competences

Route::get('/', function () {
    return view('welcome');


});


Route::get('/discipline', function () {
    $post = new App\Models\Discipline();
    $post->nomDiscipline = 'DEV/MOBILE';
    $post->save();


    return $post;


});


Route::get('/competences', function () {
    $post = new App\Models\Competences();
    $post->nomCompetences = 'DEV/MOBILE';
    $post->save();


    return $post;


});

