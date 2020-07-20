<?php
  $tidnum = filter_input(INPUT_POST, 'tidnum');
  $tn = filter_input(INPUT_POST, 'tn');
 ;
 
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
$sql = "INSERT INTO teacher ( tidnum, tn)
values ('$tidnum','$tn')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
}

header("refresh:3; url=teacher.php");
?>