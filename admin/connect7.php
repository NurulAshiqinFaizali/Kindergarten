<?php
  $aic = filter_input(INPUT_POST, 'aic');
  $asid = filter_input(INPUT_POST, 'asid');
  $adate = filter_input(INPUT_POST, 'adate');
  $areason= filter_input(INPUT_POST, 'areason');
 
 
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
$sql = "INSERT INTO attendance ( aic, asid, adate, areason )
values ('$aic','$asid', '$adate', '$areason')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
}

header("refresh:3; url=attendance.php");
?>