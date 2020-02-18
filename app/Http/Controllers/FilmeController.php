<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmeController extends Controller
{
    // Listando filmes
    public function index() {
        $filmes = Filme::all();

        return view('filmes.lista-filmes')->with('filmes', $filmes);

        
    }

}
