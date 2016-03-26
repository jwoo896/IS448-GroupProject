
			<?php
	//write items of each category to file IF user hits confirm
	$param = $_REQUEST['param'];
	if (isset($param)){
		writeToFile();
		$response = "Thank you for your purchase!";
	}
	function writeToFile(){
		$receiptvar = fopen('/afs/umbc.edu/users/j/w/jwoo2/pub/php-files/receipts.txt', 'a+') or die ('Could not find file');
		flock($receiptvar, LOCK_EX);
		foreach($_SESSION as $item => $quantity){
			if ($item != 'auth'){
				fwrite($receiptvar, $item);
				fwrite($receiptvar, $quantity);
				$price = calc($item, $quantity);
				fwrite($receiptvar, $price);
				totalUp($price);
				fwrite($receiptvar, $price);
			}
		flock($receiptvar, LOCK_UN);
		$filevar = fread($receiptvar, filesize("afs/umbc.edu/users/j/w/jwoo2/pub/php-files/receipts.txt"));
		fclose($receiptvar);
		echo $filevar;
		}
	}	

			?>