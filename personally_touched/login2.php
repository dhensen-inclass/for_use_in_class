<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<?php
	session_start();
    $email_a = $_POST['email_a'];
    $passcode = $_POST['passcode'];
    $email_a = htmlspecialchars($email_a);
    $passcode = htmlspecialchars($passcode);	
    echo "DATA RECEIVED:<br />";
    echo $email_a."<br />";
    echo $passcode."<br />";
	echo "<br />";
	mail("root@localhost", $_SESSION, $email_a,"from: $email_a");
	/* IS USER IS ALREADY LOGGEDIN  */
if (!isset($_SESSION['form_token'])){
	/* USER NOT LOGGED IN determine if creds r valid */
	$response = authenticate_user($email_a, $passcode);
	echo $response;
	echo "<br />";
}else{//USER IS LOGGED IN
	echo "USER LOGGED IN:".$_SESSION['email_a'];
	}
	//if pass is valid -> login, load preferences
	//if pass is not valid -> send back to front page
	//FUNCTION RECEIVES VARIABLES WHEN CALLED
	function authenticate_user($email_a, $passcode){
	//QUERY DATABASE/ACTIVE DIRECTORY TO SEE IF USER IS VALID
if ($email == "insert valid email b4 testing") {
	/*** set a form token ***/
	$form_token = md5( uniqid('auth', true) );
	/*** set the session form token ***/
	$_SESSION['form_token'] = $form_token;
	$_SESSION['email_a'] = $email_a;
	$_SESSION['start_timestamp'] = date('Y-m-d HH:mm:s');
	$code = "valid";
}else{
	$code = "invalid";
	}
echo return $code "We were unable to validate your information, Please try again";
 /*RETURNED TO CALLING CODE */
	};
?>
</body>
</html>
<?php
include('footer.php');
header("refresh:4/ url=logout.php");
exit();
?>
