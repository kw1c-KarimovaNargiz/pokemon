<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $csvPath = 'C:\laragon\www\pokemonbuilder\pokemon-data-scraping\data\pokemon_details.csv';
        $pokemonData = $this->loadCsvData($csvPath);

        return view('pokemons', compact('pokemonData'));
    }

    private function loadCsvData($filePath)
    {
        $data = [];
    
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Get the header row and trim whitespace
            $header = fgetcsv($handle);
            $header = array_map('trim', $header); // Trim whitespace from headers
            while (($row = fgetcsv($handle)) !== false) {
                $data[] = array_combine($header, $row);
            }
            fclose($handle);
        } else {
            // Handle the error if the file can't be opened
            return null;
        }
    
        return $data;
    }
    
}
