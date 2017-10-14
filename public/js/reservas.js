  function bloqueoFecha() {
    document.getElementById("inputHorario").disabled = false;
    document.getElementById("inputFecha").disabled = true;
    document.getElementById("inputFecha").value = "";
    document.getElementById("idHorario").checked = true;
    document.getElementById("idDia").checked = false;
    buscarHorario();
  }
  
  function bloqueoHorario() {
    document.getElementById("inputHorario").disabled = true;
    document.getElementById("inputFecha").disabled = false;
    document.getElementById("inputHorario").value = "";
	  document.getElementById("idHorario").checked = false;
    document.getElementById("idDia").checked = true;
    buscarFecha();
  }

  function buscarHorario() {
  let input, table, tr, td
  input = document.getElementById('inputHorario');
  table = document.getElementById('tablaReservas');
  tr = table.getElementsByTagName('tr');

  for (var i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName('td');
    
    if (td[3].innerHTML.indexOf(input.value) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }

  }
}

function buscarFecha() {
  let input, table, tr, td
  input = document.getElementById('inputFecha');
  table = document.getElementById('tablaReservas');
  tr = table.getElementsByTagName('tr');

  for (var i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName('td');
    
    if (td[1].innerHTML.indexOf(input.value) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }

  }


}