<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'conta_id',
    ];

    protected $table = 'videos';

    //um video pertence a uma conta
    public function conta()
    {
        return $this->belongsTo(Conta::class);
    }
    
}