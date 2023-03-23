<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public $fillable=[
        'user_id',
        'juego_id',
        'comentario'
    ];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
