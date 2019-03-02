<?php
	//VALID OPTIONS ARE: $_GET (pass through URL), $_POST (pass from form), $_REQUEST (either)
	
	//COLLECT VARIABLES PASSED TO PAGE
	$cars = $_POST['cars'];//integer/number
    $email = $_POST['email'];//string in email format
    $pmt = $_POST['pmt'];//m
	
	echo "RAW DATA RECEIVED:<br />";
	echo "CAR:".$cars."<br />";	
    echo "EMAIL:".$email."<br />";
	echo "PMT:".$pmt."<br />";
	echo "----\n";
	
	//SANITIZE VARIABLES
    echo "PROCESSED DATA RECEIVED:<br />";
	$product_id = (int)$cars;
	echo "CAR:".$product_id."<br />";	
	$pmt = preg_replace("/[^0-9,.]/", "", $pmt);
	echo "PMT:".$pmt;
	echo "----\n";
	
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "EMAIL:".$email."<br />";
	} else {
		echo "NON VALID EMAIL";
	}
	
	//VALIDATE
	$valid_order = true;
	if ($product_id > 0 && $product_id < 5){
		
	}else{
		$valid_order = false;
	}
	// switch($product_id){
		// case 1:
			// $car_price = 40000;
			// break;
		// case 2:
			// $car_price = 50000;
			// break;
		// case 3:
			// $car_price = 60000;
			// break;
		// case 4:
			// $car_price = 70000;
	// }
	if ($product_id == 1){
		$car_price = 40000;
	}elseif ($product_id == 2){
		$car_price = 50000;
	}elseif ($product_id == 3){
		$car_price = 60000;
	}elseif ($product_id == 4){
		$car_price = 70000;
	}
	
	//CALC AMT DUE
	$pmt = preg_replace("/[^0-9.]/", "", $pmt);
	
	echo $pmt;
	
	$amt_due = (double)$car_price - (double)$pmt;
	
	echo "<br />";
	echo "PRICE:$car_price";
	echo "<br />";
	echo "DEPOSIT:$pmt";
	echo "<br />";
	echo "AMOUNT DUE:$amt_due";
	echo "<br />";
		
	if ($valid_order){
		echo "POSSIBLE SHIP";
	}else{
		echo "NO SHIP";
	}
	
	//DISPLAY DETAILS TO USER
	echo "+++\n";
	echo "FINAL SUMMARY\n";
	echo "CUSTOMER: $email\n";
	echo "SELECTED CAR: $cars\n";
	echo "TOTAL PRICE: $car_price\n";
	echo "LESS DEPOSIT: $pmt\n";
	echo "AMOUNT DUE: $amt_due\n";
?> 