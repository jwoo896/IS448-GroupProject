function restockNotif(){
	alert("Out of stock. Please request more.");
}

function restockRequest(){
	alert("Request has been sent.");
}

function dropDown(){
	document.getElementById("login").classList.toggle("show");
}
window.onclick = function(event){
	if (!event.target.matches('.dropbtn')){
		var dropl = document.getElementsByClassName("dropdown-content");
		var i;
		for (i=0; i<dropl.length; i++){
			var openDropdown = dropl[i];
			if (openDropdown.classList.contains('show')){
				openDropdown.classList.remove('show');
			}
		}
		
	}
}


function showModal(){
	document.getElementById('confirmationModal').className = 'modalShow';
}
function closeModal(){
	document.getElementById('confirmationModal').className = 'modalHide';	
}

function finalize(){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		var param = document.getElementById('finalize');
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('divBody').innerHTML = xmlhttp.responseText;
		}
		xmlhttp.open("POST", "finalize.php?p=" + param, true);
		xmlhttp.send();
	}
}
