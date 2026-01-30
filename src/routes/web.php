<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

Route::post('/ponentes-vista',[PonenteVistaController::class,'store'])->name('ponentes.store');
Route::delete('/ponentes-vista/{id}', [PonenteVistaController::class, 'destroy'])->name('ponentes.destroy');

});
