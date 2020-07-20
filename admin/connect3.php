<?php
  $scode = filter_input(INPUT_POST, 'scode');
  $sn = filter_input(INPUT_POST, 'sn');
 $stid = filter_input(INPUT_POST, 'stid');;
 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO subject (scode, sn, stid )
values ('$scode','$sn','$stid')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
}

header("refresh:5; url=subject.php");
?>