<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();

        return view('marcas.index', compact('marcas'));
    }
}
