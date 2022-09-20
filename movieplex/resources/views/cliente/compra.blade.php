@extends('layouts.app')



@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: white; border-color:transparent;">


                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                    <div>
                        <h1 style="color: black; text-align:center;">Compra de Boletería <br> Detalles de la Película <strong>{{ $peliculacartelera->name }}</strong> </h1>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sinopsis:</strong>
                            {{ $peliculacartelera->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estreno:</strong>
                            {{ $peliculacartelera->year }}
                        </div>
                        <div class="form-group">
                            <strong>Reparto:</strong>
                            {{ $peliculacartelera->reparto }}
                        </div>
                        <div class="form-group">
                            <strong>Director:</strong>
                            {{ $peliculacartelera->director }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $peliculacartelera->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Sala:</strong>
                            {{ $peliculacartelera->sala }}
                        </div>
                        <div class="form-group">
                            <strong>Idioma:</strong>
                            {{ $peliculacartelera->idioma }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $peliculacartelera->genero }}
                        </div>
                        <br>
                        <div>
                        <h1 style="color: black; text-align:center;"> Detalles de la compra</h1>
                        <h4 style="color: black; text-align:center;"> 
                        <img src="{!! asset('images/icono.png') !!}" alt="" width="70" height="45"></h4>
                    </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="clientename" id="clientename" style="width: 25%;">
                        </div>
                        
                        <div>
                            <label for="horarios">Hora de la función:</label>
                            <select name="horarios" id="horarios" class="form-select" style="width: 25%;">
                                <option value="{{$sala->id}}">{{ $sala->horario1 }}</option>
                                <option value="{{$sala->id}}">{{ $sala->horario2 }}</option>
                                <option value="{{$sala->id}}">{{ $sala->horario3 }}</option>
                            </select>
                        </div>

                        <div class="form-group" style="margin-top: 1%;">
                           <h4>Sala: {{ $peliculacartelera->sala }}</h4> 
                        </div>

                        <div class="form-group">
                        <strong>Tarjeta Débito/Crédito:</strong>
                            <input type="number" name="tarjeta" id="tarjeta" value="1234567891230354" class="form-control" style="width: 25%;">
                        </div>

                        <div class="form-group">
                           <strong>Cantidad de Boletas: 
                           <form method="POST" oninput="resultado.value=parseInt(boletas.value)*parseInt(valor2.value)">
                            <input type="number" id="boletas" value="" class="form-control" style="width: 25%;">
                            <input type="hidden" id="valor2" value="15000"> <br>
                            <h3>Valor Total: <output name="resultado" for="boletas valor2"> </output> </h3>
                            
                        </form>
                        
                           
                        </div>

                        <div class="row justify-content-center">
                        <div class="float-right col-9" style="margin-top: 2%;">
                            <a class="btn"  style="background: #645CAA; color:white" href="{{ url('cliente') }}"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>  Atrás</a>
                        </div>
                        <div class="float-right col-3" style="margin-top: 2%;">
                            <a class="btn"  style="background: #16A085; color:white" href="{{ url('compra/pdf') }}"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg>  Comprar</a>
                        </div>
                        </div>

                    </div>

                    
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
