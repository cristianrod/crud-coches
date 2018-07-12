<?php

namespace App\Http\Controllers;

use App\Coche;
use App\Marca;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //Obtenemos todos los coches
        $coches = Coche::all();

        return view('coches.index', compact('coches'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $marcas = Marca::all();

        return view('coches.create', compact('marcas'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        Coche::create([
            'nombre' => request('nombre'),
            'caracteristica' => request('caracteristica'),
            'marca_id' => request('marca')
        ]);

        return redirect('/coches');
    }

    /**
     * @param Coche $coche
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Coche $coche)
    {
        $marcas = Marca::all();

        return view('coches.update', compact('coche', 'marcas'));
    }

    /**
     * @param Coche $coche
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Coche $coche)
    {
        $coche->nombre = request('nombre');
        $coche->caracteristica = request('caracteristica');
        $coche->marca_id = request('marca');

        $coche->save();

        return redirect('/coches');
    }

    /**
     * @param Coche $coche
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function delete(Coche $coche)
    {
        $coche->delete();

        return redirect('/coches');
    }

    /**
     * @param Marca $marca
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Marca $marca)
    {
        return view('coches.show', compact('marca'));
    }
}
