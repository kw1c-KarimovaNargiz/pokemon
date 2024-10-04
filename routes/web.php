<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::get('/pokemons', [PokemonController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
