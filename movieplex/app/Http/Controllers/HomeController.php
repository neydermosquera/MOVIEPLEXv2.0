<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PeliculacarteleraController;
use App\Peliculacartelera;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index(){
       
        if(auth()->check()){
            if(auth()->user()->role == null){
                return redirect('/cliente');  
            } 

            return view('homeAdmin');
        }
    }
    


    
}