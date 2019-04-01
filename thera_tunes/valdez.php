<html>
<head>
	<link rel="stylesheet" type="text/css" href="login_page.css">
</head>
<body>
	<br>
	<h3>Please enjoy some music while your party is reached</h3>
	<br><br>
<div style="padding-left: 55px;">
<br>
<br>
<video src="rush-closer.to.the.heart.mp4" width="400" height="305" controls="true"></video>
</div>
<br>
<?php
$conne = "mysql_connect('','','','')";
$conne;
if ($conne) {
	echo "<h3>your request has been granted</h3>";
}else{
	echo "<h3>weh weh: </h3>".mysql_error();
}
mysql_close($conne);
echo "<h3>ive run my course</h3>";
?>
<br>
</body>
</html>