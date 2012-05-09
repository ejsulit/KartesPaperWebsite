<?php

include 'connect.php';

$company_name = $_POST['company_name'];
$contact_name = $_POST['contact_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$contact_num = $_POST['contact_number'];
$email = $_POST['email'];

$query = "INSERT INTO customers VALUES ('','$company_name','$contact_name','$address','$city','$contact_num','$email')";
mysql_query($query);

?>
