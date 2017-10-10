<nav class="navbar navbar-inverse sinMargen">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span><img src="images/world-cup.png" class ="icons-navbar"></span>Fútbol Da Vinci</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><span><img src="images/football.png" class ="icons-navbar"></span>Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span><img src="images/stadium.png" class ="icons-navbar"></span>Reservar Cancha<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/reservas/5">Cancha N° 5</a></li>
            <li><a href="/reservas/7">Cancha N° 7</a></li>
            <li><a href="/reservas/9">Cancha N° 9</a></li>
          </ul>
        </li>

        <!-- Este debe ir solo si es un user-->
        <li><a href="#"><span><img src="images/footbal-shoe.png" class ="icons-navbar"></span>Mis Reservas</a></li>


        <li><a data-toggle="modal" data-target="#modalContact"><span><img src="images/email.png" class ="icons-navbar"></span>Contacto</a></li>

        <!-- Estos son los que hay que poner para el admin -->
        <li><a data-toggle="modal" data-target="#modalConfirmarReserva"><span><img src="images/footbal-shoe.png" class ="icons-navbar"></span>Confirmar Reserva</a></li>
        <li><a data-toggle="modal" data-target="#modalRegistrarCancha"><span><img src="images/estadio.png" class ="icons-navbar"></span>Generar Cancha</a></li>


      </ul>
      <ul class="nav navbar-nav navbar-right">
      @guest
        <li><a data-toggle="modal" data-target="#modalSignup"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
        <li><a data-toggle="modal" data-target="#modalLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @else
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
      @endguest
      </ul>
    </div>
  </div>
</nav>
