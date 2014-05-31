<?
error_reporting(7);

date_default_timezone_set ("Europe/Moscow"); 

error_reporting(7);
mysql_connect("localhost","u4614282_buhlo","buhlo") or die('mysql error');
mysql_select_db("u4614282_buhlo") or die('mysql error');

mysql_query ("set character_set_client='cp1251'");
mysql_query ("set character_set_results='cp1251'");
mysql_query ("set collation_connection='cp1251_general_ci'"); 


function q($sql) {
	$q = mysql_query($sql) or die(mysql_error());
	return $q;
}

function r($r){return mysql_fetch_Array($r);}


?>