<?php
$my_variable = mysqli_connect('127.0.0.1','root','secret');
/* for  mysqli_connect()   the function accepts 3 values
('host ip','mysql user','mysql passwd'); */
if(!$my_variable);
echo "control statement for debugging/testing";
/* says if my connection does not successfully establish to print me a sentence so i know */
USE db_name;
/*  i will now be setting variables on the $_POST returned form data  */
$my_variable_1 = $_POST['input field name'];
$my_variable_2 = $_POST['input field name'];
$my_variable_3 = $_POST['input field name'];
/*   reassign the POST variables with character escaping for security purposes   */
$my_variable_1 = htmlspecialchars($my_variable_1);
$my_variable_2 = htmlspecialchars($my_variable_2);
$my_variable_3 = htmlspecialchars($my_variable_3);
/*  and now i will use the mysql insert statement as i would regularly within the mariadb   */
$my_variable_4 = "INSERT INTO table_name (column_1, column_2) VALUES ('$my_variable_1','my_variable_2','my_variable_3')";
/* the above statement requires use of the mysql_query() which takes 2 values ($my_variable,$my_variable_4)   PS...without the use of variables the function looks like mysql_query('query')  */
if(!mysql_query($my_variable_1,$my_variable_4));
echo "control statement if failed";
if(mysql_query($my_variable_1,$my_variable_4));
echo "control statement if successful";
/*   and then proper technique is to close connection   */
mysql_close($my_variable);
/*  add a page redirection back to main page when finished, using the header() which accepts 3 values ("value_1:length_of_time_secs; url=php_escape_page")  */
header("refresh:2; url=index.html");
exit();
?>

