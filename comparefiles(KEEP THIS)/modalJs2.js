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
function openModal() {
    $('requestedModal').style.display = "block";
	setTimeout(closeModal,2000);
}
function closeModal() {
	$('requestedModal').style.display = "none";
}
