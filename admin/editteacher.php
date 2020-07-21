<?php
include('../functions.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$id=$_REQUEST['tid'];
$query = "SELECT * from teacher where tid='".$id."'"; 
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
$id=$_POST['tid'];
$edit_tidnum=$_POST['tidnum']; 
$edit_tn=$_POST['tn']; 


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$query="UPDATE teacher SET tidnum='$edit_tidnum',tn='$edit_tn' WHERE tid='$id'" ;
mysqli_query($con, $query) or die (mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

<div> 
<form  method="post" action=""> 


<input type="hidden" name="new" value="1" />
<input name="tid" type="hidden" value="<?php echo $row['tid'];?>" />

<div class="input-group">
    <label>TEACHER ID </label>
   <input type="text" name="tidnum" required value="<?php echo $row['tidnum'];?>" />
  </div>

  <div class="input-group">
    <label>TEACHER NAME</label>
<input type="text" name="tn" required value="<?php echo $row['tn'];?>" />
  </div>
  
<p><input name="submit" type="submit" value="Update" /></p>

</form>
<?php } ?>
</div>
</div>
</body>
</html>