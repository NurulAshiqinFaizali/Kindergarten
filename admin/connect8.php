<?php
  $smsecid = filter_input(INPUT_POST, 'smsecid');
  $smsic = filter_input(INPUT_POST, 'smsic');
  $smsc = filter_input(INPUT_POST, 'smsc');
  $smsm= filter_input(INPUT_POST, 'smsm');
 
 
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
$sql = "INSERT INTO studentmark ( smsecid, smsic, smsc, smsm )
values ('$smsecid','$smsic', '$smsc', '$smsm')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
}

header("refresh:3; url=studentMark.php");
?>