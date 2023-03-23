<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;

class ActualizarCategoria extends Component
{
    public $categoria;
    public $nombre_categoria;

    public $rules=[
        'nombre_categoria'=>'required|max:30'
    ];
    
    public function mount(Categoria $categoria){
        $this->nombre_categoria=$categoria->categoria;
    }


    public function actualizarCategoria(){
        $datos=$this->validate();
        $nuevaCategoria=$datos['nombre_categoria'];

        $this->categoria->categoria=$nuevaCategoria;

        $this->categoria->save();

        session()->flash('success');

        return redirect()->route('categorias');

    }
}
