<?php
  $crn = filter_input(INPUT_POST, 'crn');
  $ctid = filter_input(INPUT_POST, 'ctid');
 
 
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
$sql = "INSERT INTO classroom ( crn, ctid )
values ('$crn','$ctid')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
}

header("refresh:3; url=classroom.php");
?>