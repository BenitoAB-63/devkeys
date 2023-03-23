<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaJuego extends Model
{
    use HasFactory;

    protected $table='categoriasjuegos';

    protected $fillable=[
        'categoria_id',
        'juego_id'
    ];

    public function juegos(){
        return $this->hasMany(Juego::class);

    }

    public function categorias(){
        return $this->hasMany(Categoria::class);
        
    }
}
