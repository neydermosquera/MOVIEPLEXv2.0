<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('capacidad') }}
            {{ Form::text('capacidad', $sala->capacidad, ['class' => 'form-control' . ($errors->has('capacidad') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad']) }}
            {!! $errors->first('capacidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario1') }}
            {{ Form::text('horario1', $sala->horario1, ['class' => 'form-control' . ($errors->has('horario1') ? ' is-invalid' : ''), 'placeholder' => 'Horario1']) }}
            {!! $errors->first('horario1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario2') }}
            {{ Form::text('horario2', $sala->horario2, ['class' => 'form-control' . ($errors->has('horario2') ? ' is-invalid' : ''), 'placeholder' => 'Horario2']) }}
            {!! $errors->first('horario2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario3') }}
            {{ Form::text('horario3', $sala->horario3, ['class' => 'form-control' . ($errors->has('horario3') ? ' is-invalid' : ''), 'placeholder' => 'Horario3']) }}
            {!! $errors->first('horario3', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="row justify-content-center">
    
    <div class="float-right col-6">
    <a class="btn"  style="color: white; background: #645CAA;" href="{{ route('salas.index') }}"> 
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