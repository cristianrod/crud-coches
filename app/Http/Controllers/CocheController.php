<?php

namespace App\Http\Controllers;

use App\Coche;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    public function index()
    {
        $coches = Coche::all();

        return view('coches.index', compact('coches'));
    }
}
