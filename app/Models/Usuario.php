<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        
    ];

    protected $table = 'usuarios';
    
    //um usuario pode ter uma conta e uma conta pertence a um usuario 
    //um video pertence a um usuario
    public function conta()
    {
        return $this->hasOne(Conta::class);
    }

    //um usuario pode ter varios videos
    public function video()
    {
        return $this->hasMany(Video::class);
    }
    
}