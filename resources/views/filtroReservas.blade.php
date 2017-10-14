
<script src="{{ asset('js/reservas.js')}}"></script>
<link rel="stylesheet" href="{{ asset('css/filtroReservas.css')}}">


  <form class="panel-filtro">
  	<div class="filtros-centrado">
	      <i class="fa fa-filter" aria-hidden="true"></i>
		  <label>Horario</label> 
		  <input class="separacion2" class="radio-inline" onclick="bloqueoFecha()" type="radio" id="idHorario" ">
	      <input class="separacion" type="text" id="inputHorario" onkeyup="buscarHorario()" placeholder="Horario.." disabled>
	       
	      <i class="fa fa-filter" aria-hidden="true"></i>
	      <label>Día</label> 
	      <input class="separacion2" class="radio-inline" onclick="bloqueoHorario()" type="radio" id="idDia" "> 
	      <input class="separacion" type="text" id="inputFecha" onkeyup="buscarFecha()" placeholder="2017-01-31.." disabled>
	      
 	</div>
  </form>
