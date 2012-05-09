<?php
        error_reporting(0);
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username&&$password){
		require 'connect.php';
	
		$query = mysql_query("SELECT * FROM users WHERE username='$username'");
		
		$numrows = mysql_num_rows($query);
		
		if($numrows!=0){
			while($row = mysql_fetch_assoc($query)){
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
			}
			
			if($username==$dbusername&&$password==$dbpassword){
				echo 'Logged in';
				$_SESSION['username']=$dbusername;
			}else{
				echo 'Incorrect Password';
			}
		}else{
			echo 'Unknown user';
		}
	}else{
		echo 'Please fill all fields';
	}

?>
