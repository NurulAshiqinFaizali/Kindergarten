<?php
include('../functions.php')
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" type="text/css" href="../style.css">
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #003366;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<div class="header">
<p><a href="index.php">Home</a> 
| <a href="home.php">Insert New Record</a> 
<h2>View Fee Records</h2>
<table id="customers" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Num</strong></th>
<th><strong>Fee ID</strong></th>
<th><strong>StudentID</strong></th>
<th><strong>Amount</strong></th>
<th><strong>Status</strong></th>
<th><strong>Date</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sel_query="Select * from fee";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["fid"]; ?></td>
<td align="center"><?php echo $row["fic"]; ?></td>
<td align="center"><?php echo $row["fa"]; ?></td>
<td align="center"><?php echo $row["fs"]; ?></td>
<td align="center"><?php echo $row["fdate"]; ?></td>
<td align="center">
<a href="editfee.php?fid=<?php echo $row["fid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="deletefee.php?fid=<?php echo $row["fid"]; ?>">Delete</a>
</td>
</tr>
<?php  $count++; } ?>
</tbody>
</table>

<br>
<h2>View Attandance Records</h2>
<table  id="customers" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Num</strong></th>
<th><strong>Attandance ID</strong></th>
<th><strong>StudentID</strong></th>
<th><strong>Section</strong></th>
<th><strong>Absent Date</strong></th>
<th><strong>Reason</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sel_query="Select * from attendance";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["aid"]; ?></td>
<td align="center"><?php echo $row["aic"]; ?></td>
<td align="center"><?php echo $row["asid"]; ?></td>
<td align="center"><?php echo $row["adate"]; ?></td>
<td align="center"><?php echo $row["areason"]; ?></td>
<td align="center">
<a href="editatt.php?aid=<?php echo $row["aid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="deleteatt.php?aid=<?php echo $row["aid"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

<br>
<h2>View Classroom Records</h2>
<table  id="customers" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Num</strong></th>
<th><strong>Classroom ID</strong></th>
<th><strong>Classroom Name</strong></th>
<th><strong>Teacher ID</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sel_query="Select * from classroom";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["crid"]; ?></td>
<td align="center"><?php echo $row["crn"]; ?></td>
<td align="center"><?php echo $row["ctid"]; ?></td>
<td align="center">
<a href="editclass.php?crid=<?php echo $row["crid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="deleteclass.php?crid=<?php echo $row["crid"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

<br>
<h2>View Student Mark Records</h2>
<table  id="customers" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Num</strong></th>
<th><strong>ID</strong></th>
<th><strong>Section</strong></th>
<th><strong>StudentID</strong></th>
<th><strong>Subject Code</strong></th>
<th><strong>Student Mark</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sel_query="Select * from studentmark";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["smid"]; ?></td>
<td align="center"><?php echo $row["smsecid"]; ?></td>
<td align="center"><?php echo $row["smsic"]; ?></td>
<td align="center"><?php echo $row["smsc"]; ?></td>
<td align="center"><?php echo $row["smsm"]; ?></td>
<td align="center">
<a href="editstud.php?smid=<?php echo $row["smid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="deletestud.php?smid=<?php echo $row["smid"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>


<br>
<h2>View Subject Records</h2>
<table  id="customers" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Num</strong></th>
<th><strong>Subject ID</strong></th>
<th><strong>Subject Code</strong></th>
<th><strong>Subject Name</strong></th>
<th><strong>Teacher ID</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sel_query="Select * from subject";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["scid"]; ?></td>
<td align="center"><?php echo $row["scode"]; ?></td>
<td align="center"><?php echo $row["sn"]; ?></td>
<td align="center"><?php echo $row["stid"]; ?></td>
<td align="center">
<a href="editsub.php?scid=<?php echo $row["scid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="deletesub.php?scid=<?php echo $row["scid"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>


<br>
<h2>View Teacher Records</h2>
<table  id="customers" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Num</strong></th>
<th><strong>TeacherID</strong></th>
<th><strong>Teacher Number</strong></th>
<th><strong>Teacher Name</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sel_query="Select * from teacher";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["tid"]; ?></td>
<td align="center"><?php echo $row["tidnum"]; ?></td>
<td align="center"><?php echo $row["tn"]; ?></td>
<td align="center">
<a href="editteacher.php?tid=<?php echo $row["tid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="deleteteacher.php?tid=<?php echo $row["tid"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>