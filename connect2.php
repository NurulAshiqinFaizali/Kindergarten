<?php
  $secic = filter_input(INPUT_POST, 'secic');
  $secnum = filter_input(INPUT_POST, 'secnum');
 $secrid = filter_input(INPUT_POST, 'secrid');
 $sectid = filter_input(INPUT_POST, 'sectid');
 
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
$sql = "INSERT INTO section ( secic, secnum, secrid, sectid )
values ('$secic','$secnum','$secrid', '$sectid')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
}

header("refresh:1; url=section.php");
?>