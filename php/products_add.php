<?php

include 'connect.php';

$product_name = $_POST['product_name'];
$color = $_POST['color'];
$qty = $_POST['qty'];
$size = $_POST['size'];
$class = $_POST['class'];


$query = "INSERT INTO products VALUES ('','$product_name','$color','$qty','','','','$class','$size')";
mysql_query($query);

?>
