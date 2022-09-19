<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\Auth;

class PerfilController extends Controller
{
   public function index(){

      $usuario = \DB::table('users')->where(Auth::user()->id = 'id')->get();

      return view('cliente.perfil', compact('users'))
          ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
   }

}

