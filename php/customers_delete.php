<?php
include 'connect.php';
if($_POST['id']){
    $id = $_POST['id'];
    $query = "DELETE FROM customers WHERE CustomerID=$id";
    mysql_query($query);   
}

?>
