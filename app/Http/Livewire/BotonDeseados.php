<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class BotonDeseados extends Component
{
    public $juego;
    public $isWished;

     //Mount hace de constructor, solo se ejecuta al principio de instanciarse livewire. 
     public function mount($juego)
     {
         //isWished tendra un 1 o nada dependiendo de si el usuario ya dio al boton o no.
         $this->isWished=$juego->checkWished(Auth::user());//$juego->deseados->where('user_id',Auth::user()->id);
         
     }

     //Agregara o eliminara de deseados segun este o no esté
     public function agregarDeseados(){
       
        if($this->juego->checkWished(Auth::user())){
            $this->juego->deseados()->where('juego_id',$this->juego->id)->delete();
            //Al cargarse el componente isWished se habra quedado con un unico valor, si cambiamos este se hará un rerender y se volvera a ejecutar el mount()
            $this->isWished=false;
             
        }else{
            $this->juego->deseados()->create(['user_id'=>Auth::user()->id]);
            $this->isWished=true;
        }

     }

    public function render()
    {

        return view('livewire.boton-deseados');
    }
}
