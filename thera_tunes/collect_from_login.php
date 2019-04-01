<!DOCTYPE html>
<html>
<head>
	<title>internal</title>
</head>
<body>
<h2>i am just here to collect and reject or to save what you gave and then send it away</h2>

<?php
/*
require_once "fast_pass.php";
include "login_page.php";
*/
$new_peep = htmlspecialchars($_POST['user_name']);
$list_of_peeps = fopen("list_of_peeps.txt", 'a+');
fwrite($list_of_peeps, $new_peep);
fclose($list_of_peeps);
</body>
</html>