<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
