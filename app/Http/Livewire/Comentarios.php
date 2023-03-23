<?php

namespace App\Http\Livewire;

use App\Models\Juego;
use Livewire\Request;
use Livewire\Component;
use App\Models\Comentario;
use Illuminate\Support\Facades\Auth;

class Comentarios extends Component
{
    public $juego;
    public $comentarios;
    public $comentario;


    public $rules=[
        'comentario'=>'required'
    ];
   

    public function mount(){
        
        //Cargamos los comentarios del juego
        $this->comentarios=Juego::find($this->juego)->comentarios;
      

    }

    public function nuevoComentario(){

        $this->validate();


        Comentario::create([
            'user_id'=> Auth::user()->id,
            'juego_id'=> $this->juego,
            'comentario'=> $this->comentario
        
        ]);

        $this->comentario='';

        $this->mount();
    }

    public function render()
    {
        return view('livewire.comentarios');
    }
}
