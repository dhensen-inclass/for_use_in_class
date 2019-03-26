<?php
include 'from_commas.php';
$fil = fopen("fl_insurance.csv", "r");
print_r(fgetcsv('fl_insurance.csv',0,'%',' '));
fclose($fil);
?>