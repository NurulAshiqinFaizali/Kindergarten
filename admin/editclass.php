<?php
include('../functions.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$id=$_REQUEST['crid'];
$query = "SELECT * from classroom where crid='".$id."'"; 
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
$id=$_POST['crid'];
$edit_crn=$_POST['crn']; 
$edit_ctid=$_POST['ctid']; 


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$query="UPDATE classroom SET crn='$edit_crn',ctid='$edit_ctid' WHERE crid='$id'" ;
mysqli_query($con, $query) or die (mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

<div> 
<form  method="post" action=""> 


<input type="hidden" name="new" value="1" />
<input name="crid" type="hidden" value="<?php echo $row['crid'];?>" />

   <div class="input-group">
    <label>CLASSROOM NAME</label>
   <input type="text" name="crn" required value="<?php echo $row['crn'];?>" />
  </div>
 <div class="input-group">
    <label>TEACHER ID </label>
   <input type="text" name="ctid" required value="<?php echo $row['ctid'];?>" />
  </div>
<p><input name="submit" type="submit" value="Update" /></p>

</form>
<?php } ?>
</div>
</div>
</body>
</html>