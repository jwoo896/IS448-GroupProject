function showModal(prodNum)
{
	new Ajax.Request("updateInventory.php",
		{
			method: "get",
			parameters: {item:prodNum},
			onSuccess: openModal
		}
	);
}
function openModal(ajax) {
    $('requestedModal').style.display = "block";
	setTimeout(function() {closeModal(ajax.responseText);},2000);
    }
function closeModal(id) {
	$('requestedModal').style.display = "none";
	$(id).disabled = "disabled";
}

function alertAdmin(prodNum) {
	new Ajax.Request("completeRequest.php",
		{
			method: "get",
			parameters: {item:prodNum},
			onSuccess: showAlert
		}
	);
}
function showAlert(ajax) {
	alert("The item has been ordered");
	$(ajax.responseText).style.background = "red";	
	$(ajax.responseText).disabled = "disabled";	
}
function changeTableBackground(row) {
	document.getElementById(row).style.backgroundColor = "gray";
}
function revertTableBackground(row) {
	if(row % 2 == 0) {
		document.getElementById(row).style.backgroundColor = "white";
	}
	else{
		document.getElementById(row).style.backgroundColor = "#E9E9E9";
	}
}
