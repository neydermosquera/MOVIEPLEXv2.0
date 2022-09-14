@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Agregar Película a la Cartelera') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <H1 style="text-align: center;">Películas en Cartelera</H1> 




                </div>
            </div>
        </div>
    </div>
</div>
@endsection