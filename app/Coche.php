<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $fillable = ['nombre', 'caracteristica', 'marca_id'];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
