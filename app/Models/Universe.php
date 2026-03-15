<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    protected $fillable = [
        'universe',
        'company',
        'age'
    ];

    public function superheroes()
    {
        return $this->hasMany(Superhero::class,'id_universe');
    }
}