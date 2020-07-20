<?php
  $fic = filter_input(INPUT_POST, 'fic');
  $fa = filter_input(INPUT_POST, 'fa');
 $fs = filter_input(INPUT_POST, 'fs');
 $fdate = filter_input(INPUT_POST, 'fdate');
 
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
$sql = "INSERT INTO fee ( fic, fa, fs, fdate )
values ('$fic','$fa','$fs', '$fdate')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
}

header("refresh:3; url=fee.php");
?>