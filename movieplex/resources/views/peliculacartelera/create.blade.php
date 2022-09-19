@extends('layouts.app')

@section('template_title')
    Create Peliculacartelera
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Agregar Película a Cartelera</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('peliculacarteleras.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('peliculacartelera.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
