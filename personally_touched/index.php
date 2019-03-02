<?php
	session_start();
	if (isset($_SESSION['form_token'])){
		echo "USER LOGGED IN";
		echo '<a href="logout.php">LOGOUT</a>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" initial-scale="1.0" content="ie=edge">
	<meta http-equiv="X-UA-Compatability" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="styles/social_web_app.css">
	<link href="lib/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<title>personalized networking site</title>
</head>
<body>
<header id="input">
<form action="login.php" method="POST">
	<div class="body">
	<label for="email_a">Please Input Your Email Address Here:</label>
	<br>
	<input type="email" name="email_a" placeholder="somebody@tolove.com" required="email_a">
	<br>
	<label for="passcode">8-15 characters #, A, 1</label>
	<br>
	<input type="password" name="passcode" placeholder="***************" required="passcode"> 
	<?php
	/*pattern="(/=^.{8,15}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.##*[A-Z])(?=.*[a-z]).*">  */ ?>
	<br><br>
	<button type="submit" name="submit">Login</button>
	</div>
	<?php
include('footer.php');
?>
<script src="lib/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
</header>
</form>
<section>
	<p></p>
	<p></p>
</section>
</body>
</html>
</section>