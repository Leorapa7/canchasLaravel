<div id="modalConfirmarReserva" class="modal fade" role="dialog">
  <div class="modal-dialog">
		<div class="form-style-8">
		  <h2>Confirmar Reserva Señada</h2>
		  <form method="post" action="/confirmarReserva">
        {{csrf_field()}}
		    <input type="text" name="codReserva" placeholder="Código de Reserva" required/>
		    <input type="submit" value="Enviar" />
		  </form>
		</div>
	</div>
</div>
