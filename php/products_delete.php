<?php
include 'connect.php';
if($_POST['id']){
    $id = $_POST['id'];
    $query = "DELETE FROM products WHERE product_id=$id";
    mysql_query($query);   
}

?>
