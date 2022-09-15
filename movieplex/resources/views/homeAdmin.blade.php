@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido de nuevo Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <H1 style="text-align: center;">¿Qué quieres hacer hoy?</H1> 

                    <div class="botones">
                        <div class="row"> 

                        <div class="card" style="width: 18rem; margin-left: 5%; margin-top: 2%; background: #1B2631;">
                            <div class="card-body">
                                <h1 class="card-title" style="color:white">Películas</h1>
                                <p class="card-text" style="color:white">Aquí podrás editar toda la información relacionada con las películas, ya sea en Cartelera o en Próximos estrenos</p>
                                <a href="{{ url('/peliculacarteleras') }}" class="btn" style="width: 100%; background: #16A085; color:white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                </svg> Modificar Cartelera</a> <br>
                                <a href="{{ url('/peliculaestrenos') }}" class="btn" style="width: 100%; margin-top: 2%; background: #16A085; color:white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                </svg> Modificar Estrenos </a> <br>
                                
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; margin-left: 5%; margin-top: 2%; background: #1B2631;">
                            <div class="card-body">
                                <h1 class="card-title" style="color:white">Salas</h1>
                                <p class="card-text" style="color:white">Aquí podrás editar toda la información relacionada a las salas de proyección de las Películas
                                </p> <br>
                                <a href="#" class="btn" style="width: 100%; background: #16A085; color:white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                </svg> Modificar Salas </a> <br>
                                
                            </div>
                        </div>
                        <div class="card" style="width: 19rem; margin-left: 5%; margin-top: 2%; background: #1B2631;">
                            <div class="card-body">
                                <h1 class="card-title" style="color:white">Administrador</h1>
                                <p class="card-text" style="color:white">Aquí podrás editar toda la información relacionada con los Administradores de la Página Web.</p> <br>
                                <a href="#" class="btn" style="width: 100%; background: #16A085; color:white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                </svg> Modificar Administrador</a> <br>
                                
                            </div>
                        </div>

                        </div>
                        
                        <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-3">
                                <a href="{{ route('logout') }}" class="btn" style="margin-top: 15%; width: 85%;  color: white; background: #645CAA;"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                </svg> Salir </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
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