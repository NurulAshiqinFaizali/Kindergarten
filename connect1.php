<?php
 $cic = filter_input(INPUT_POST, 'cic');
 $cn = filter_input(INPUT_POST, 'cn');
 $cid = filter_input(INPUT_POST, 'cid');
 $cgender = filter_input(INPUT_POST, 'cgender');
 $ctn = filter_input(INPUT_POST, 'ctn');
 $con = filter_input(INPUT_POST, 'con');
 $cjob = filter_input(INPUT_POST, 'cjob');
 $cwork= filter_input(INPUT_POST, 'cwork');
 $csalary = filter_input(INPUT_POST, 'csalary');
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
$sql = "INSERT INTO contact (cic, cn, cid, cgender, ctn, con, cjob, cwork, csalary)
values ('$cic','$cn', '$cid', '$cgender', '$ctn', '$con', '$cjob', '$cwork', '$csalary')";
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