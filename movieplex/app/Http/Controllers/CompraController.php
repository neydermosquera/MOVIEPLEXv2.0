<?php

namespace App\Http\Controllers;

use App\Peliculacartelera;
use App\Sala;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index(){
        return view('cliente.compra');
       }

       public function show($id){
        $peliculacartelera = Peliculacartelera::find($id);
        $sala = Sala::find($peliculacartelera->sala);

        return view('cliente.compra', compact('peliculacartelera', 'sala'));
    }
}
