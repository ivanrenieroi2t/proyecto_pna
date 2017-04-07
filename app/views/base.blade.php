<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>PNA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>

	{{ HTML::style('css/style.css') }}
    {{ HTML::script('javascript/script.js') }}
</head>
<body>
	@include('menu')
	<div class="container">
		@yield('cuerpo') 
	</div>
</body>
</html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>