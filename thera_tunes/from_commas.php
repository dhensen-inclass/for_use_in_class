<!DOCTYPE html>
<html>
<head>
	<title>fl insurance table</title>
</head>
<body>
<?php
include "from_commas2.php";
echo "Now we will start on the second part
<table>";
	$fil = 'fl_insurance.csv';
	$f = fopen($fil, "r");
	while (($astr = fgetcsv($f)) !==false) {
	 	echo "<tr>";
	 	foreach ($astr as $section) {
	 		echo "<td>" . htmlspecialchars($section) . "<td>";
	 	}
	 	echo "</tr>\n";
	 }
	 fclose($f);
echo "\n</table>";
?>
</body>
</html>