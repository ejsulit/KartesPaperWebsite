<?php
	$error = 'Could not connect';
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	
	$db = 'kartes_db';
	
	if(!@mysql_connect($host,$user,$pass)||!@mysql_select_db($db)){
		die($error);
	}
?>