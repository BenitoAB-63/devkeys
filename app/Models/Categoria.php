<?php

namespace App\Models;

use App\Models\CategoriaJuego;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    public $fillable=[
        'categoria'
    ];
    public function juegos(){
        return $this->belongsToMany(Juego::class,'categoriasjuegos');
    }
}
