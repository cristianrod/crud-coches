<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public function coches()
    {
        return $this->hasMany(Coche::class);
    }
}
