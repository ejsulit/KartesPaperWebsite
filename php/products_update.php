<?php
include 'connect.php';
if($_POST['id'])
{
    $id=$_POST['id'];
    $product_name = $_POST['product_name'];
    $color = $_POST['color'];
    $qtyOnHand = $_POST['qtyOnHand'];
    $size=$_POST['size'];
    $class = $_POST['class'];


    $sql = "UPDATE products SET product_name='$product_name', Color='$color', qtyOnHand='$qtyOnHand', Size='$size', class_name='$class' WHERE product_id='$id'";
    mysql_query($sql);
}
?>
