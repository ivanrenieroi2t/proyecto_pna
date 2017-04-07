<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{URL::to('jubilados')}}">Sistema PJ PNA</a>
    </div>
    <div class="nav navbar-nav navbar-right">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jubilados/Pensionados<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Listar</a></li>
            <li><a href="#">Agregar</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ URL::to('personal')}}">Listar</a></li>
            <li><a href="{{ URL::to('personal/create')}}">Agregar</a></li>
          </ul>
        </li>
    </div>
	</div>
</nav>

