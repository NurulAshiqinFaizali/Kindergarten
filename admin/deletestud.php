<?php
include('../functions.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";
$id=$_REQUEST['smid'];
$query = "DELETE FROM studentmark WHERE smid=$id"; 
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$result = mysqli_query($con,$query);
header("Location: view.php"); 
?>