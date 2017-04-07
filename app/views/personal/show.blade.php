@extends('base')
@section('cuerpo') 
	<h1>Mostrando datos de  {{ $personal->nombre." ".$personal->apellido }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Nombre:</strong> {{ $personal->nombre}}<br>
            <strong>Apellido:</strong> {{ $personal->apellido}}<br>
            <strong>Dirección:</strong> {{ $personal->direccion}}<br>
            <strong>Teléfono:</strong> {{ $personal->telefono}}<br>
            <strong>Celular:</strong> {{ $personal->celular}}<br>
            <strong>Jerarquía:</strong> {{ $personal->jerarquia}}<br>
            <strong>Categoría:</strong> {{ $personal->categoria}}<br>
            
        </p>
    </div>
@stop