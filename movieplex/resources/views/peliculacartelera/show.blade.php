@extends('layouts.app')

@section('template_title')
    {{ $peliculacartelera->name ?? 'Show Peliculacartelera' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Película</span>
                        </div>
                        
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $peliculacartelera->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $peliculacartelera->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Year:</strong>
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
                            <strong>Idioma:</strong>
                            {{ $peliculacartelera->idioma }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $peliculacartelera->imagen }}
                        </div> <br>
                        <div class="float-right">
                            <a class="btn"  style="background: #16A085; color:white" href="{{ route('peliculacarteleras.index') }}"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>  Atrás</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
