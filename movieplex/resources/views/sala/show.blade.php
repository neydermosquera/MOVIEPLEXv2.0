@extends('layouts.app')

@section('template_title')
    {{ $sala->name ?? 'Show Sala' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Sala</span>
                        </div>
                        
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Capacidad:</strong>
                            {{ $sala->capacidad }}
                        </div>
                        <div class="form-group">
                            <strong>Horario1:</strong>
                            {{ $sala->horario1 }}
                        </div>
                        <div class="form-group">
                            <strong>Horario2:</strong>
                            {{ $sala->horario2 }}
                        </div>
                        <div class="form-group">
                            <strong>Horario3:</strong>
                            {{ $sala->horario3 }}
                        </div>
                        <br>
                        <div class="float-right">
                            <a class="btn"  style="background: #16A085; color:white" href="{{ route('salas.index') }}"> 
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
