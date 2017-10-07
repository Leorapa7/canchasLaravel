<div id="modalContact" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <div class="form-style-8">
      <h2>Cargar Cancha</h2>
      <form>
        <input type="text" name="nombre" placeholder="Nombre de la Cancha" required/>
        	<select name="tamano">
        	    <option value="" disabled selected hidden>Tamaño</option>
        		<option value="cancha_5">Cancha N° 5</option>
        		<option value="cancha_7">Cancha N° 7</option>
        		<option value="cancha_9">Cancha N° 9</option>
      		</select>
        <input type="number" name="precio_dia" min="0" max="10000" placeholder="Precio de Día" required/>
    	<input type="number" name="precio_noche" min="0" max="10000" placeholder="Precio de Noche" required/>
        <label class="radio_box">Días Habilitados</label>
         	<label class="checkbox-inline"><input type="checkbox" value="Lunes">Lun</label>
    		<label class="checkbox-inline"><input type="checkbox" value="Martes">Mar</label>
    		<label class="checkbox-inline"><input type="checkbox" value="Miercoles">Mie</label> 
    		<label class="checkbox-inline"><input type="checkbox" value="Jueves">Jue</label>
    		<label class="checkbox-inline"><input type="checkbox" value="Viernes">Vie</label>
    		<label class="checkbox-inline"><input type="checkbox" value="Sabado">Sab</label> 
    		<label class="checkbox-inline"><input type="checkbox" value="Domingo">Dom</label> 	
        <input type="time" name="hora_ini" min="0" max="10000" placeholder="Horario de Apertura 10:00" required/>
    	<input type="time" name="hora_fin" min="0" max="10000" placeholder="Horario de Cierre 00:00" required/>
        <input type="button" value="Registrar Cancha" />
      </form>
    </div>
  </div>
</div>