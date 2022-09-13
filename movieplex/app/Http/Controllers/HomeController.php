<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            if(auth()->user()->role == 'admin'){
                return view('homeAdmin');  
            } 
        return view('home');
        }
    }
}