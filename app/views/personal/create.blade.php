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
        <select name='jerarquia' onchange="cambia_categoria()"> 
            <option value="Personal Superior">Personal Superior</option> 
            <option value="Personal Subalterno">Personal Subalterno</option>
        </select>        
    </div>
    <div class="form-group">
        {{ Form::label('categoria', 'Categoría') }}
        <select name="categoria"> 
            <option value="(PG) Prefecto General">(PG) Prefecto General</option> 
            <option value="(PM) Prefecto Mayor">(PM) Prefecto Mayor</option> 
            <option value="(PP) Prefecto Principal">(PP) Prefecto Principal</option> 
            <option value="(PR) Prefecto">(PR) Prefecto</option> 
            <option value="(OP) Oficial Principal">(OP) Oficial Principal</option> 
            <option value="(OA) Oficial Ayudante">(OA) Oficial Ayudante</option> 
            <option value="(OX) Oficial Auxiliar">(OX) Oficial Auxiliar</option> 
        </select>
    </div>

    {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@stop
	