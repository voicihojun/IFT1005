
function checkDate() {
	var reservedDate = document.forms[0].date.value;
	if (reservedDate == "") {
		alert("Vérifier la date d'arrivée, SVP");
		return;
	}
	
	reservedDate = reservedDate.replace(/-/g, "");
	
	if (reservedDate <= today()) {
		alert('This page says' + '\n' + 'SVP rentrer la bonne date.');
		return;
	}

	document.getElementById("myform").submit();
	

}


function today() {
	var current = new Date();
	var dd = current.getDate();
	var mm = current.getMonth() + 1;
	var yyyy = current.getFullYear();	

	if (dd < 10) {
		dd = '0' + dd;
	}

	if (mm < 10) {
		mm = '0' + mm;
	}

	var today = "" + yyyy + mm + dd;
	return today;
}