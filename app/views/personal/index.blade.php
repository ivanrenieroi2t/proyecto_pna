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
		                <!-- we will add this later since its a little more complicated than the other two buttons -->
		                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
		                <a class="btn btn-small btn-success" href="{{ URL::to('personal/' . $value->id) }}">Mostrar</a>

		                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
		                <a class="btn btn-small btn-info" href="{{ URL::to('personal/' . $value->id . '/edit') }}">Editar</a>
		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>
	</div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>