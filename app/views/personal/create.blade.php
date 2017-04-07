<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>PNA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	{{ HTML::style('css/style.css') }}
    {{ HTML::script('javascript/script.js') }}
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="{{URL::to('jubilados')}}">Sistema PJ PNA</a>
		    </div>
		    <div class="nav navbar-nav navbar-right">
		         <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jubilados/Pensionados<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Agregar</a></li>
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Agregar</a></li>
		          </ul>
		        </li>
		    </div>
		</nav>

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

	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>