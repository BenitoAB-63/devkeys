<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CrearCategoria extends Component
{

    public $categoria;

    public $rules=[
        'categoria'=>'required|max:30'
    ];

    public function nuevaCategoria(){
        $datos=$this->validate();

        $nuevaCategoria=new Categoria;

        $nuevaCategoria::create([
            'categoria'=>$datos['categoria']
        ]);

        session()->flash('created');

        return redirect()->route('categorias');
    }
}
