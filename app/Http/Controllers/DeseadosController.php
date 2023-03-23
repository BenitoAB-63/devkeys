<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeseadosController extends Controller
{

    public function show(Request $request){
        //Pasamos los juegos en lista de deseados del usuario
        $deseados=$request->user()->deseados;
        $juegos=[];
       
        for($i=0;$i<count($deseados);$i++){
            $juegos[$i]=Juego::find($deseados[$i]->juego_id);
        }

        return view('deseados',["juegos"=>$juegos]);
    }

    
    public function store(Request $request, Juego $juego){
   
       $juego->deseados()->create(['user_id'=>$request->user()->id]);

       return back();
    }

    public function destroy(Request $request, Juego $juego){
   
        $juego->deseados()->where('juego_id',$request->juego->id)->delete();

        return back();
    }


}
