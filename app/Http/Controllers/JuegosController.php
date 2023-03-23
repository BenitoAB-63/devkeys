<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\CategoriaJuego;
use Illuminate\Support\Facades\DB;

class JuegosController extends Controller
{
    public $juegos;


    public function index(){
        $this->juegos=Juego::all();
        return view('dashboard',['juegos'=>$this->juegos]);
    }

    public function edit(Juego $juego){      
       
        return view('juegos.actualizarJuego',['juego'=>$juego]);
    }

    public function edit_categoria(Juego $juego){
        $categorias=Categoria::all();
        $categorias_juego=$juego->categorias;
       
        return view('juegos.actualizarCategorias',['juego'=>$juego,'categorias'=>$categorias,'categorias_juego'=>$categorias_juego]);
    }

    public function actualizarCategoriasJuego(Request $request){
        $categorias=$request->nuevas_categorias;

        //Eliminamos las categorias previas
        CategoriaJuego::where('juego_id',$request->juego)->delete();
        //Tambien DB::table('categoriasjuegos')->where('juego_id','=',$request->juego)->get();

        foreach($categorias as $categoria){
            CategoriaJuego::create([
                'categoria_id'=>$categoria,
                'juego_id'=>$request->juego
            ]);
        }

        return back();
    }

    public function nuevo_juego(){
        return view('juegos.nuevoJuego');
    }
}
