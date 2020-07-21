<?php
include('../functions.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$id=$_REQUEST['aid'];
$query = "SELECT * from attendance where aid='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
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
$id=$_POST['aid'];
$edit_aic=$_POST['aic']; 
$edit_asid=$_POST['asid']; 
$edit_adate=$_POST['adate']; 
$edit_areason=$_POST['areason']; 

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$query="UPDATE attendance SET aic='$edit_aic',asid='$edit_asid' ,adate='$edit_adate',areason='$edit_areason' WHERE aid='$id'" ;
mysqli_query($con, $query) or die (mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

<div> 
<form method="post" action=""> 


<input type="hidden" name="new" value="1" />
<input name="aid" type="hidden" value="<?php echo $row['aid'];?>" />

<div class="input-group">

<label>STUDENT ID (IC NUMBER)</label>
<input type="text" name="aic" required value="<?php echo $row['aic'];?>"/>
 
</div>

<div class="input-group">
<label>SECTION</label>
<select name="asid" required value="<?php echo $row['asid'];?>"> 
    <option value="1">LEVEL 1 (AGE 4)</option>
    <option value="2">LEVEL 2 (AGE 5)</option>
    <option value="3">LEVEL 3 (AGE 6)</option>
</select>
  </div>
 
  <div class="input-group">
   
<label>ABSENCE DATE</label>   
<input type="date" name="adate" required value="<?php echo $row['adate'];?>" />

</div>
<div class="input-group">
<label>ABSENCE REASON</label>
<input type="text" name="areason"  required value="<?php echo $row['areason'];?>" />
</div>

<p><input name="submit" type="submit" value="Update" /></p>
   
  
</form>
<?php } ?>
</div>
</div>
</body>
</html>