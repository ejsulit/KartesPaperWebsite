<?php
	$error = 'Could not connect';
	
	$host = 'a.db.shared.orchestra.io';
	$user = 'user_d6cb9903';
	$pass = 'C4MCeOHHm-ef0;';
	
	$db = 'db_d6cb9903';
	
	if(!@mysql_connect($host,$user,$pass)||!@mysql_select_db($db)){
		die($error);
	}
?>