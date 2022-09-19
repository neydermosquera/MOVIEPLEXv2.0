<?php

namespace App\Http\Controllers;

use App\Peliculaestreno;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function index(){

        $cartelera = \DB::table('peliculacarteleras')->select('id', 'name', 'descripcion', 'year', 'reparto', 'director', 'duracion', 'sala', 'idioma', 'genero', 'imagen')->get();
        return view('homeCliente', compact('cartelera'));
    }

    public function show(){
        $estrenos = \DB::table('peliculaestrenos')->select('id', 'name', 'descripcion', 'year', 'reparto', 'director', 'duracion', 'sala', 'idioma', 'genero', 'imagen')->get();
        return view('cliente.estrenos', compact('estrenos'));
    }


    
}
