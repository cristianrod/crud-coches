<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //Obtenemos todas las marcas
        $marcas = Marca::all();

        return view('marcas.index', compact('marcas'));
    }
}
