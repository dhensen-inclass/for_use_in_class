<?php
    //EXAMPLE TO READ FROM CSV/TSV FILE
    $filename = "docs/FL_insurance_sample.csv";
    if (file_exists($filename)) {//FILE EXISTS
        $handle = fopen($filename, "r");
        //ini_set('auto_detect_line_endings',TRUE);
        if ($handle){//FILE CAN BE OPENED
            $data = fgetcsv($handle, '\r\n');
            
            echo "<pre>";
            print_r($data);
            echo "</pre>";
//            $data = fgetcsv($handle, ",");//READ DATA INTO VARIABLE
//            foreach($data as $line){
//                echo "LINE:";
//                print_r($line);
//                echo "<br />";
//            }
        }
    }else{
        echo "NO FILE TO READ";
    }
?>


<?php
//$file = "docs/FL_insurance_sample.csv";
//$row = 1;
//if (($handle = fopen($file, "r")) !== FALSE) {
//    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//        $num = count($data);
//        echo "<p> $num fields in line $row: <br /></p>\n";
//        $row++;
//        for ($c=0; $c < $num; $c++) {
//            echo $data[$c] . "<br />\n";
//        }
//    }
//    fclose($handle);
//}
?>
