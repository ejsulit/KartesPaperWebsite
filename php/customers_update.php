<?php
include 'connect.php';
if($_POST['id'])
{
    $id=$_POST['id'];
    $company_name = $_POST['company_name'];
    $contact_name = $_POST['contact_name'];
    $address = $_POST['address'];
    $city=$_POST['city'];
    $contact_num = $_POST['contact_num'];
    $email = $_POST['email'];
    
    $sql = "UPDATE customers SET CompanyName='$company_name', ContactName='$contact_name', Address='$address', City='$city', ContactNo='$contact_num', email='$email' WHERE CustomerID='$id'";
    mysql_query($sql);
}
?>
