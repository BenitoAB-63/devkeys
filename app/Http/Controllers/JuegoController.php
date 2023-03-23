<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Categoria;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    
    public function show(Juego $juego){
        $categorias=Categoria::all();
        return view('components.show-juego',['juego'=>$juego]);
    }
}
