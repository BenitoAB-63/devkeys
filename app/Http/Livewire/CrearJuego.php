<?php

namespace App\Http\Livewire;

use App\Models\Juego;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class CrearJuego extends Component
{
    use WithFileUploads;

    public $juego;
    public $imagen;
    public $descripcion;
    public $precio;
    public $cantidad;

    public $rules=[
        'juego'=>'required|unique:juegos|max:100',
        'imagen'=>'required|image',
        'descripcion'=>'required',
        'precio'=>'required',
        'cantidad'=>'required'
    ];

    public function nuevoJuego(){
        $datos=$this->validate();
        $nuevoJuego=new Juego;

        $imagenServidor=Image::make($this->imagen);
        $nombreImagen=Str::uuid().".".$this->imagen->extension();
        $imagenServidor->fit(700,983);
        $imagenServidor->save('img/juegos/'.$nombreImagen);
        $datos['imagen']=$nombreImagen;

        $nuevoJuego::create([
            'juego'=>$datos['juego'],
            'imagen'=>$datos['imagen'],
            'descripcion'=>$datos['descripcion'],
            'precio'=>$datos['precio'],
            'cantidad'=>$datos['cantidad'],
        ]);

        session()->flash('success');

        return redirect()->route('juegos');
        
        
    }
    

    public function render()
    {
        return view('livewire.crear-juego');
    }
}
