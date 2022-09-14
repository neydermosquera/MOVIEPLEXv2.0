<div class="box box-info padding-1" style="width: 60%;">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $peliculacartelera->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $peliculacartelera->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('year') }}
            {{ Form::text('year', $peliculacartelera->year, ['class' => 'form-control' . ($errors->has('year') ? ' is-invalid' : ''), 'placeholder' => 'Year']) }}
            {!! $errors->first('year', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reparto') }}
            {{ Form::text('reparto', $peliculacartelera->reparto, ['class' => 'form-control' . ($errors->has('reparto') ? ' is-invalid' : ''), 'placeholder' => 'Reparto']) }}
            {!! $errors->first('reparto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('director') }}
            {{ Form::text('director', $peliculacartelera->director, ['class' => 'form-control' . ($errors->has('director') ? ' is-invalid' : ''), 'placeholder' => 'Director']) }}
            {!! $errors->first('director', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('duracion') }}
            {{ Form::text('duracion', $peliculacartelera->duracion, ['class' => 'form-control' . ($errors->has('duracion') ? ' is-invalid' : ''), 'placeholder' => 'Duracion']) }}
            {!! $errors->first('duracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idioma') }}
            {{ Form::text('idioma', $peliculacartelera->idioma, ['class' => 'form-control' . ($errors->has('idioma') ? ' is-invalid' : ''), 'placeholder' => 'Idioma']) }}
            {!! $errors->first('idioma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $peliculacartelera->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div> <br>
    <div class="row justify-content-center">
    
    <div class="float-right col-6">
    <a class="btn"  style="color: white; background: #645CAA;" href="{{ route('peliculacarteleras.index') }}"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>  Atrás</a>
    </div>
    <div class="col-2">
        <button type="submit" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
        </svg> Guardar</button>
    </div>

    </div>
    
</div>