<?php
 $sic = filter_input(INPUT_POST, 'sic');
 $sfn = filter_input(INPUT_POST, 'sfn');
 $sln = filter_input(INPUT_POST, 'sln');
 $sgender = filter_input(INPUT_POST, 'sgender');
 $sdob = filter_input(INPUT_POST, 'sdob');
 $saddr = filter_input(INPUT_POST, 'saddr');
 $salle = filter_input(INPUT_POST, 'salle');
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
$sql = "INSERT INTO student (sic, sfn, sln, sgender, sdob, saddr, salle)
values ('$sic','$sfn', '$sln', '$sgender', '$sdob', '$saddr', '$salle')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
}

header("refresh:1; url=contact.php");
?>