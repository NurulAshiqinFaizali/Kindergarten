<?php
include('../functions.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$id=$_REQUEST['fid'];
$query = "SELECT * from fee where fid='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
<div class="header">
<p><a href="view.php">Dashboard</a> 
| <a href="home.php">Insert New Record</a> 
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_POST['fid'];
$edit_fic=$_POST['fic']; 
$edit_fa=$_POST['fa']; 
$edit_fs=$_POST['fs']; 
$edit_fdate=$_POST['fdate']; 

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$query="UPDATE fee SET fic='$edit_fic',fa='$edit_fa' ,fs='$edit_fs',fdate='$edit_fdate' WHERE fid='$id'" ;
mysqli_query($con, $query) or die (mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

<div> 
<form  method="post" action=""> 

<input type="hidden" name="new" value="1" />
<input name="fid" type="hidden" value="<?php echo $row['fid'];?>" />

<p><input type="text" name="fic" placeholder="Enter Student ID" 
required value="<?php echo $row['fic'];?>" /></p>

<p><input type="text" name="fa" placeholder="Enter Fee Amount" 
required value="<?php echo $row['fa'];?>" /></p>

<select name="fs" required value="<?php echo $row['fs'];?>">
  <option value="PAID">PAID</option>
  <option value="UNPAID">UNPAID</option>
</select>

<p><input type="date" name="fdate" placeholder="Enter Fee Date" 
required value="<?php echo $row['fdate'];?>" /></p>


<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>