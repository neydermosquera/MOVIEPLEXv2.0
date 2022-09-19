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
                        <h1 style="color: black; text-align:center;">Compra de Boletería - Detalles de la Película {{ $peliculacartelera->name }}</h1>
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
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img src="{{asset($peliculacartelera->imagen)}}" alt="{{$peliculacartelera->imagen}}" width="150px">
                        </div>
                        <br>
                        <div class="float-right">
                            <a class="btn"  style="background: #16A085; color:white" href="{{ url('cliente') }}"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>  Atrás</a>
                        </div>
                        <div>
                            <select name="horarios" id="horarios">
                                <option value="{{$sala->id}}">{{ $sala->horario1 }}</option>
                                <option value="{{$sala->id}}">{{ $sala->horario2 }}</option>
                                <option value="{{$sala->id}}">{{ $sala->horario3 }}</option>
                            </select>
                        </div>

                    </div>

                    
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
