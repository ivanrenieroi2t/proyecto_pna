@extends('base')
@section('cuerpo')
	<table class="table table-striped table-bordered">
	    <thead>
	        <tr>
	            <td>Nombre</td>
	            <td>Apellido</td>
	        </tr>
	    </thead>
	    <tbody>
	    @foreach($personal as $key => $value)
	        <tr>
	            <td>{{ $value->nombre }}</td>
	            <td>{{ $value->apellido }}</td>
	            <td>
	                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
	                {{ Form::open(array('url' => 'personal/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
	                {{ Form::close() }}
	                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
	                <a class="btn btn-small btn-success" href="{{ URL::to('personal/' . $value->id) }}">Mostrar</a>

	                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
	                <a class="btn btn-small btn-info" href="{{ URL::to('personal/' . $value->id . '/edit') }}">Editar</a>
	            </td>
	        </tr>
	    @endforeach
	    </tbody>
	</table>
@stop