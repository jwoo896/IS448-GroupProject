/*
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
}*/

var a = 3;

//written by Jae Woo
function openModal(){
	document.getElementById("requestedModal").style.display="block";
}
//written by Jae Woo
function showModal(){
	document.getElementById('confirmationModal').className = 'modalShow';
}
//writen by Jae Woo
function closeModal(){
	document.getElementById('confirmationModal').className = 'modalHide';
}
//written by Jae Woo
function add(value){
	var item = getElementsByClassName("quantity");
	var n = item[value];
	alert(n);
	/*new Ajax.Request("addItem.php",
	{
		method="post",
		parameters()
	});*/
}
function final(){
	new Ajax.Request("finalize.php",
	{
		method: "post",
		onSuccess: respond,
		onFailure: retry
	});
}
//written by Jae Woo
function confirmPointer(){
	document.getElementById('confirmBtn').style.cursor='pointer';
}

//written by Jae Woo
function respond(ajax){
	closeModal();
	document.write(ajax.responseText);
}
function retry(ajax){
	closeModal();
}

//written by Brandon Tesar
function debtClear(){

	new Ajax.Request( "clearDebt.php",
  {
    method: "post",
    onSuccess: display
  } );

}
//Brandon Tesar
function display(ajax){
	var numRows = document.getElementById("debtTable").rows.length;
if (ajax.responseText == ""){

	for (i = 1; i < numRows + 1; i++) {
		document.getElementById(i+"C").innerHTML = 0;
}

}else{
	alert("FAILED QUERY: " + ajax.responseText);
}

}
//Jae Woo
function finalize(newLocation){
	window.location = newLocation;
	return false;
}


//written by Brandon Tesar
function highlightTableRow(rowID,myColor){
    //alert(rowID);
    document.getElementById(rowID).style.backgroundColor = myColor;
}

function unhighlightTableRow(rowID){
    //alert(rowID);
    if (rowID%2 == 1){
    document.getElementById(rowID).style.backgroundColor = '#E9E9E9';
}else{
    document.getElementById(rowID).style.backgroundColor = '#FFFFFF';
}
}
