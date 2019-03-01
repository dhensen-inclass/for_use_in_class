<?php
$form_registration_host = 'localhost';
$form_registration_username = 'root';
$form_registration_db_name = 'form_registration';
$form_registration_passcode = 'testphras3';
msql_connect($form_registration_host,$
form_registration_username,$form_registration_passcode) or die
mysql_error());
mysql_select_db($form_registration_db_name);
echo "hi";
/*
INSERT INTO `registrations_added` (`registered_user_id`, `registered_user_last_name`, `registered_user_first_name`, `registered_user_email_contact`, `registered_user_analytics_log`) VALUES (NULL, 'smythe', 'patsy', 'psmythe@email.com', '/file/path/to/users/logs');
INSERT INTO `registrations_added` (`registered_user_id`, `registered_user_last_name`, `registered_user_first_name`, `registered_user_email_contact`, `registered_user_analytics_log`) VALUES (NULL, 'smythe', 'patsy', 'psmythe@email.com', NULL);*/
?>