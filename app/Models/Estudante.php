<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    protected $fillable = ['nome', 'cpf', 'nascimento', 'sala_id'];

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }
}
