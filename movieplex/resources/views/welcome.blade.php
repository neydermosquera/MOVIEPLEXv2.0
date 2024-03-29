<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MOVIEPLEX - INICIO</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="{!! asset('images/m.png') !!}">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .tittle{
                color: white;
                font-size: xx-large;
                background-color: #03989E;
                
            }

            .btn{
                margin-left: 15%;
                margin-top: 10%;
                width: 200px;
                height: 200px;

            }

            .contenido1{
                background-color: black;
            }

            .contenido2{
                background-color: black;
                align-content: center;
            }

            .fondo{
                border-radius: 5px;
            }
          
        </style>
    </head>
<body>
        <div class="contenido1">
        <nav class="navbar row">
            <div class="container col-7">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{!! asset('images/iconoblanco.png') !!}" alt="" width="70" height="45" style="margin-left: 150%;">
                </a>
            </div>
            <div class="col-5" style="font-family: Century Gothic; font-size: x-large;">
            
            </nav>
            <div class="row ">
            <div class="login col-sm-3 contenido1">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/home') }}" class="btn tittle">Regresar a la página <br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-caret-right-square-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
                            </svg>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="" role="button">
                            <button type = "button" class="btn tittle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg> <br>    
                            Ingresa
                            </button><br>
                        </a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">
                            <button type = "button" class="btn  tittle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg><br>
                            Regístrate
                            </button><br> 
                        </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

            <div class="col-9 contenido2">
            <img src="{!! asset('images/inicio.png') !!}" alt="" width="95%" height="95%" class="fondo">
            </div>

            </div>
        </div>
        
    </body>
</html>
