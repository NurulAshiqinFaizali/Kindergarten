<?php
include('../functions.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";
$id=$_REQUEST['crid'];
$query = "DELETE FROM classroom WHERE crid=$id"; 
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$result = mysqli_query($con,$query);
header("Location: view.php"); 
?>