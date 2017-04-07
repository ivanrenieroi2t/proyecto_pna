@extends('base')
@section('cuerpo')
	<h1>Agregar Personal</h1>

	{{ Form::open(array('url' => 'personal','name'=> 'form1')) }}
	
    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('apellido', 'Apellido') }}
        {{ Form::text('apellido', Input::old('apellido'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('direccion', 'Dirección') }}
        {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('telefono', 'Teléfono') }}
        {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('celular', 'Celular') }}
        {{ Form::text('celular', Input::old('celular'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('jerarquia', 'Jerarquía') }}
		{{ Form::select('jerarquia', array( 'Personal Superior' => 'Personal Superior',
											'Personal Subalterno' => 'Personal Subalterno'),
											'Personal Superior') }}
    </div>
    <div class="form-group">
        {{ Form::label('categoria', 'Categoría') }}
		{{ Form::select('categoria', array( '(PG) Prefecto General' => '(PG) Prefecto General',
											'(PM) Prefecto Mayor' => '(PM) Prefecto Mayor'),
											'(PG) Prefecto General') }}
    </div>

    {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@stop
	