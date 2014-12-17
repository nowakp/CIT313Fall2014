<?php

/* Database config */

$db_host		= 'localhost';
$db_user		= 'nowakp';
$db_pass		= 'indy123';
$db_database	= 'fa14_31300_nowakp'; 

/* End config */
$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>
