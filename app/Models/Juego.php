<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Juego extends Model
{
    use HasFactory;

    protected $fillable=[
        'juego',
        'imagen',
        'descripcion',
        'precio',
        'cantidad'
    ];

    public function categorias(){
        return $this->belongsToMany(Categoria::class,'categoriasjuegos');
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function deseados(){
        return $this->hasMany(Deseados::class);
    }

    //Devolvemos true o false en funcion del Usuario. Si En deseados hay algun juego agregado por el usuario autenticado devolveremos true.
    public function checkWished(User $user){
        return $this->deseados->contains('user_id',$user->id);
    }
}
