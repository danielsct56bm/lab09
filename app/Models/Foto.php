<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    public function Users(){
        return $this->belongsTo(User::class);
    }
    public function Comentarios(){
        return $this->hasMany(Comentario::class);
    }
}
