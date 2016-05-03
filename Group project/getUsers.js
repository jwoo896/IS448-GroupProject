/**
 * Created by Josh on 4/30/2016.
 */
function complete() {

    new Ajax.Autocompleter("pin", "suggested", "getUsers.php", {paramName:"sq"});

};


function validate(){
	var pin = document.getElementById('pin').value;
	patt = /[A-z0-9]{4,7}/i;
	if(!patt.test(pin)){
		document.getElementById('pin').style.color = "red";
		document.getElementById('error').innerHTML = "* Please enter right format";
		return false;
	}
	else{
		document.getElementById('pin').style.color = "black";
		document.getElementById('error').innerHTML = "";
		return true;
	}
}