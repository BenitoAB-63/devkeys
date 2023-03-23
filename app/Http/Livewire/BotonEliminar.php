<?php

namespace App\Http\Livewire;

use App\Models\Juego;
use Livewire\Component;

class BotonEliminar extends Component
{
    public $tipo;
    public $juego;
    public $categoria;

    public function eliminarJuego(){
        

        $this->juego->delete();

        
        
        return redirect()->route('juegos');
    }

    public function eliminarCategoria(){
        
        $this->categoria->delete();

        return redirect()->route('categorias');

    }

    public function render()
    {
        return view('livewire.boton-eliminar');
    }
}
