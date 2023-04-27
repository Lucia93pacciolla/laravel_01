<?php

use Illuminate\Support\Facades\Route;

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

Route::get('start', function () {
    return view('welcome');
})->name('homepage');


Route::get('studenti', function(){
    return view('Studenti');
})->name('chi-siamo-studenti');


Route::get('servizi', function(){
    $corsi = [
        ['id' => 1, 'nome' => 'Full', 'insegnante' => 'Insegnante: Alessio'],
        ['id' => 2, 'nome' => 'Front', 'insegnante' => 'Insegnante: Maria'],
        ['id' => 3, 'nome' => 'Back', 'insegnante' => 'Insegnante: Giulia'],
    ];
    return view('i-nostri-corsi', ['corsi' => $corsi]);
})->name('i-corsi');


route::get('i-nostri-corsi/dettaglio/{id}', function($id){
    $corsi = [
        ['id' => 1, 'nome' => 'Full', 'insegnante' => 'Insegnante: Alessio', 'lezione' => 'giovedì'],
        ['id' => 2, 'nome' => 'Front', 'insegnante' => 'Insegnante: Maria', 'lezione' => 'martedì'],
        ['id' => 3, 'nome' => 'Back', 'insegnante' => 'Insegnante: Giulia', 'lezione' => 'venerdì'],
    ];

    foreach($corsi as $corso){

        if($id == $corso['id']){
             return view('i-corsi-dettaglio', ['corso' => $corso]);
        }
    }

})->name('dettaglio.corsi');