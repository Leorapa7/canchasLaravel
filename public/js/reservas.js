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
