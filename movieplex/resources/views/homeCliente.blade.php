@extends('layouts.app')



@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: transparent; border-color:transparent; margin-top: 3%;">


                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                    <div>
                        <h1 style="color: white; text-align:center;">CARTELERA</h1>
                    </div>

                    @foreach($cartelera as $cartelera)
                    
                            
                    <div class="card col-sm-3" style="width: 18rem; margin-left: 5%; margin-top: 2%; background: white;">
                            <div class="card-body" style="text-align: center;">
                             <br>
                             <img src="{{asset($cartelera->imagen)}}" alt="{{$cartelera->imagen}}" width="100%" style="border-radius: 10px;"> <br>
                             <h2 class="card-title" style="color:black; text-align:center;">{{$cartelera->name}}</h2>
                            
                            
                            <div style="text-align: justify; margin-top: 2%;">
                            <p><strong>Género:</strong> {{$cartelera->genero}}</p>
                            </div> 
                            <div style="text-align: justify">
                            <p><strong>Idioma:</strong> {{$cartelera->idioma}}</p>
                            </div> 
                            <div style="text-align: justify; margin-top: 2%;">
                            <p><strong>Estreno:</strong> {{$cartelera->year}}</p>
                            </div> 
                            <div style="text-align: justify">
                            <p><strong>Director:</strong> {{$cartelera->director}}</p>
                            </div>
                            <div style="text-align: justify">
                            <h4><strong>Sala:</strong> {{$cartelera->sala}}</h4>
                            </div>
                            <div style="text-align: justify">

                            </div>    
                            </div>
                            <div class="card-footer">
                            <div style="text-align: center">
                            <a type="submit" class="btn"  style="color: white; background: #645CAA;" href="{{ url('compra', $cartelera->id) }}"> 
                              Comprar Boletas</a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
