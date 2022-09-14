<?php

namespace App\Http\Controllers;

use App\Peliculacartelera;
use Illuminate\Http\Request;

/**
 * Class PeliculacarteleraController
 * @package App\Http\Controllers
 */
class PeliculacarteleraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculacarteleras = Peliculacartelera::paginate();

        return view('peliculacartelera.index', compact('peliculacarteleras'))
            ->with('i', (request()->input('page', 1) - 1) * $peliculacarteleras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peliculacartelera = new Peliculacartelera();
        return view('peliculacartelera.create', compact('peliculacartelera'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Peliculacartelera::$rules);

        $peliculacartelera = Peliculacartelera::create($request->all());

        return redirect()->route('peliculacarteleras.index')
            ->with('success', '¡Película guardada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peliculacartelera = Peliculacartelera::find($id);

        return view('peliculacartelera.show', compact('peliculacartelera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peliculacartelera = Peliculacartelera::find($id);

        return view('peliculacartelera.edit', compact('peliculacartelera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Peliculacartelera $peliculacartelera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peliculacartelera $peliculacartelera)
    {
        request()->validate(Peliculacartelera::$rules);

        $peliculacartelera->update($request->all());

        return redirect()->route('peliculacarteleras.index')
            ->with('success', '¡Película actualizada con éxito!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $peliculacartelera = Peliculacartelera::find($id)->delete();

        return redirect()->route('peliculacarteleras.index')
            ->with('success', '¡Película eliminada con éxito!');
    }
}
