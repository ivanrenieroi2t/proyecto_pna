@extends('base')
@section('cuerpo')

	<table class="table table-striped table-bordered">
	    <thead>
	        <tr>
	            <td>Nombre</td>
	            <td>Apellido</td>
	            <td>Dirección</td>
	        </tr>
	    </thead>
	    <tbody>
	    @foreach($personal as $key => $value)
	        <tr>
	            <td>{{ $value->nombre }}</td>
	            <td>{{ $value->apellido }}</td>
	            <td>{{ $value->direccion}}</td>
	            <td>
	                <a class="btn btn-small btn-success" href="{{ URL::to('personal/' . $value->id) }}" style="float: right; margin-left: 5px;">Mostrar</a>
	                <a class="btn btn-small btn-info" href="{{ URL::to('personal/' . $value->id . '/edit') }}" style="float: right; margin-left: 5px;">Editar</a>
	                {{ Form::open(array('url' => 'personal/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
	                {{ Form::close() }}
	            </td>
	        </tr>
	    @endforeach
	    </tbody>
	</table>
@stop