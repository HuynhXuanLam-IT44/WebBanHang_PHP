<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';

	$conn = mysql_connect($dbHost,$dbUsername,$dbPassword);
	$dbSelect = mysql_select_db('vietproshop',$conn);
	$setLang = mysql_query("SET NAMES 'utf8'");

?>