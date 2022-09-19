@extends('layouts.app')



@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: transparent;">


                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                    <div>
                        <h1 style="color: white; text-align:center;">PRÓXIMOS ESTRENOS</h1>
                    </div>

                    @foreach($estrenos as $estrenos)
                    
                            
                    <div class="card col-sm-3" style="width: 18rem; margin-left: 5%; background: white;">
                            <div class="card-body" style="text-align: center;">
                             <br>
                             <h2 class="card-title" style="color:black; text-align:center;">{{$estrenos->name}}</h2>
                            <img src="{{asset($estrenos->imagen)}}" alt="{{$estrenos->imagen}}" width="100%" style="border-radius: 10px;"> <br>
                            
                            <div style="text-align: justify; margin-top: 2%;">
                            <p><strong>Género:</strong> {{$estrenos->genero}}</p>
                            </div> 
                            <div style="text-align: justify; margin-top: 2%;">
                            <p><strong>Estreno:</strong> {{$estrenos->year}}</p>
                            </div> 
                            <div style="text-align: justify">
                            <p><strong>Director:</strong> {{$estrenos->director}}</p>
                            </div>
                            <div style="text-align: justify">
                            <h4><strong>Sala:</strong> {{$estrenos->sala}}</h4>
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