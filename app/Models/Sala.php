<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['nome'];
    
    public function estudantes()
    {
        return $this->hasMany(Estudante::class);
    }
}
