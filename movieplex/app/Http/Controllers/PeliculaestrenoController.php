<?php

namespace App\Http\Controllers;

use App\Peliculaestreno;
use Illuminate\Http\Request;

/**
 * Class PeliculaestrenoController
 * @package App\Http\Controllers
 */
class PeliculaestrenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculaestrenos = Peliculaestreno::paginate();

        return view('peliculaestreno.index', compact('peliculaestrenos'))
            ->with('i', (request()->input('page', 1) - 1) * $peliculaestrenos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peliculaestreno = new Peliculaestreno();
        return view('peliculaestreno.create', compact('peliculaestreno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Peliculaestreno::$rules);

        $peliculaestreno = Peliculaestreno::create($request->all());

        return redirect()->route('peliculaestrenos.index')
            ->with('success', 'Peliculaestreno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peliculaestreno = Peliculaestreno::find($id);

        return view('peliculaestreno.show', compact('peliculaestreno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peliculaestreno = Peliculaestreno::find($id);

        return view('peliculaestreno.edit', compact('peliculaestreno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Peliculaestreno $peliculaestreno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peliculaestreno $peliculaestreno)
    {
        request()->validate(Peliculaestreno::$rules);

        $peliculaestreno->update($request->all());

        return redirect()->route('peliculaestrenos.index')
            ->with('success', 'Peliculaestreno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $peliculaestreno = Peliculaestreno::find($id)->delete();

        return redirect()->route('peliculaestrenos.index')
            ->with('success', 'Peliculaestreno deleted successfully');
    }
}
