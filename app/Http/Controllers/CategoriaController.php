<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\CategoriaJuego;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{

    public $categorias;

    public function index(){
        $this->categorias=Categoria::all();

        return view('categorias.indexCategorias',['categorias'=>$this->categorias]);
    }

    public function show(Categoria $categoria){
        $categorias=Categoria::all();
        //$juegos_categoria=DB::table('categoriasjuegos')->where('categoria_id',$categoria->id)->get();
        $juegos=$categoria->juegos;
        return view('productos_categoria',['categorias'=>$categorias, 'categoria_actual'=>$categoria,'juegos'=>$juegos]);
    }
}
