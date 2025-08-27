<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'usuario_id',
    ];

    protected $table = 'contas';

    //um conta pertence a um usuario e um só usuario pode ter uma conta
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

}