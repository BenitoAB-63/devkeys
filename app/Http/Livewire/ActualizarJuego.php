<?php

namespace App\Http\Livewire;

use App\Models\Juego;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class ActualizarJuego extends Component
{

    use WithFileUploads;

    //public $juegoActual //No lo necesitamos aquí ya que lo pasamos directamente al mount()
    public $juego_id;
    public $juego;
    public $descripcion;
    public $imagen;
    public $precio;
    public $cantidad;
    public $imagen_nueva;




    

    protected $rules=[
        'juego'=>'required|max:100',
        'imagen_nueva'=>'nullable|image',
        'descripcion'=>'required',
        'precio'=>'required',
        'cantidad'=>'required'
        
    ];

    public function mount(Juego $juegoActual){

        $this->juego_id=$juegoActual->id;
        $this->juego=$juegoActual->juego;
        $this->descripcion=$juegoActual->descripcion;
        $this->imagen=$juegoActual->imagen;
        $this->precio=$juegoActual->precio;
        $this->cantidad=$juegoActual->cantidad;
      
        
    }

    public function updateJuego(){
     
        $datos=$this->validate();
       
        $juego=Juego::find($this->juego_id);
        //Si hay una nueva imagen
        if($this->imagen_nueva){
            //Eliminamos la imagen existente
            unlink('img/juegos/'.$this->imagen); 
            
            //Establecemos el nombre de la imagen
            $nombreImagen=Str::uuid().".".$this->imagen_nueva->extension();

            //Creamos la imagen con intervention image
            $imagenServidor=Image::make($this->imagen_nueva);

            //Recortamos
            $imagenServidor->fit(700,983);

            //Guardamos con el nuevo nombre
            $imagenServidor->save(public_path('img/juegos/').$nombreImagen);

            //Preparamos para almacenar en la tabla el nuevo nombre
            $datos['imagen']=str_replace('img/juegos/','',$nombreImagen);
        }

    
        $juego->juego=$datos['juego'];
        $juego->imagen=$datos['imagen'] ?? $this->imagen;
        $juego->descripcion=$datos['descripcion'];
        $juego->precio=$datos['precio'];
        $juego->cantidad=$datos['cantidad'];

        $juego->save();

       
        session()->flash('success');

        return route('juego.edit',['juego'=>$this->juego_id]);
    }

    public function render()
    {
        return view('livewire.actualizar-juego');
    }
}
