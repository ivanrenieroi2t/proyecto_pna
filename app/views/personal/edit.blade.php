@extends('base')
@section('cuerpo')
	<h1>Editar {{ $personal->nombre }}</h1>

	{{ Form::model($personal, array('route' => array('personal.update', $personal->id), 'method' => 'PUT', 'name' => 'form1')) }}

	    <div class="form-group">
	        {{ Form::label('nombre', 'Nombre') }}
	        {{ Form::text('nombre', null, array('class' => 'form-control')) }}
	    </div>

	    <div class="form-group">
	        {{ Form::label('apellido', 'Apellido') }}
	        {{ Form::text('apellido', null, array('class' => 'form-control')) }}
	    </div>
	    <div class="form-group">
	        {{ Form::label('direccion', 'Dirección') }}
	        {{ Form::text('direccion', null, array('class' => 'form-control')) }}
	    </div>
	    <div class="form-group">
	        {{ Form::label('telefono', 'Teléfono') }}
	        {{ Form::text('telefono',null, array('class' => 'form-control'))}}
	    </div>
	    <div class="form-group">
	        {{ Form::label('celular', 'Celular') }}
	        {{ Form::text('celular',null, array('class' => 'form-control')) }}
	    </div>
	    <div class="form-group">
	        {{ Form::label('jerarquia', 'Jerarquía') }}
	        <select name='jerarquia' onchange="cambia_categoria()"> 
	            <option value="Personal Superior" {{ ($personal->jerarquia==="Personal Superior")?"selected":""}}>Personal Superior</option> 
	            <option value="Personal Subalterno" {{ ($personal->jerarquia==="Personal Subalterno")?"selected":""}}>Personal Subalterno</option>
	        </select>        
	    </div>
	    <div class="form-group">
	        {{ Form::label('categoria', 'Categoría') }}
	        @if ($personal->jerarquia==="Personal Superior")
			    <select name="categoria"> 
		            <option value="(PG) Prefecto General" {{($personal->categoria==="(PG) Prefecto General")?"selected":""}}>(PG) Prefecto General</option> 
		            <option value="(PM) Prefecto Mayor" {{($personal->categoria==="(PM) Prefecto Mayor")?"selected":""}}>(PM) Prefecto Mayor</option> 
		            <option value="(PP) Prefecto Principal" {{($personal->categoria==="(PP) Prefecto Principal")?"selected":""}}>(PP) Prefecto Principal</option> 
		            <option value="(PR) Prefecto" {{($personal->categoria==="(PR) Prefecto")?"selected":""}}>(PR) Prefecto</option> 
		            <option value="(OP) Oficial Principal" {{($personal->categoria==="(OP) Oficial Principal")?"selected":""}}>(OP) Oficial Principal</option> 
		            <option value="(OA) Oficial Ayudante" {{($personal->categoria==="(OA) Oficial Ayudante")?"selected":""}}>(OA) Oficial Ayudante</option> 
		            <option value="(OX) Oficial Auxiliar" {{($personal->categoria==="(OX) Oficial Auxiliar")?"selected":""}}>(OX) Oficial Auxiliar</option> 
	        	</select>
			@else
			    <select name="categoria"> 
		            <option value="(AM) Ayudante Mayor" {{($personal->categoria==="(AM) Ayudante Mayor")?"selected":""}}>(AM) Ayudante Mayor</option> 
		            <option value="(AP) Ayudante Principal" {{($personal->categoria==="(AP) Ayudante Principal")?"selected":""}}>(AP) Ayudante Principal</option> 
		            <option value="(AI) Ayudante de Primera" {{($personal->categoria==="(AI) Ayudante de Primera")?"selected":""}}>(AI) Ayudante de Primera</option> 
		            <option value="(AS) Ayudante de Segunda" {{($personal->categoria==="(AS) Ayudante de Segunda")?"selected":""}}>(AS) Ayudante de Segunda</option> 
		            <option value="(AT) Ayudante de Tercera" {{($personal->categoria==="(AT) Ayudante de Tercera")?"selected":""}}>(AT) Ayudante de Tercera</option> 
		            <option value="(CI) Cabo Primero" {{($personal->categoria==="(CI) Cabo Primero")?"selected":""}}>(CI) Cabo Primero</option> 
		            <option value="(CS) Cabo Segundo" {{($personal->categoria==="(CS) Cabo Segundo")?"selected":""}}>(CS) Cabo Segundo</option>
		            <option value="(MO) Marinero" {{($personal->categoria==="(MO) Marinero")?"selected":""}}>(MO) Marinero</option>  
	        	</select>
			@endif
	    </div>

    {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@stop		
