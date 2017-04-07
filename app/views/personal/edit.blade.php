@extends('base')
@section('cuerpo')
	<h1>Edit {{ $personal->nombre }}</h1>

	{{ Form::model($personal, array('route' => array('personal.update', $personal->id), 'method' => 'PUT')) }}

	    <div class="form-group">
	        {{ Form::label('nombre', 'Nombre') }}
	        {{ Form::text('nombre', null, array('class' => 'form-control')) }}
	    </div>

	    <div class="form-group">
	        {{ Form::label('apellido', 'Apellido') }}
	        {{ Form::text('apellido', null, array('class' => 'form-control')) }}
	    </div>

    {{ Form::submit('Personal editado', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@stop		
