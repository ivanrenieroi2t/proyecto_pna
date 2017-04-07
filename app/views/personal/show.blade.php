<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>PNA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
	</div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>