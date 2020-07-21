<?php
include('../functions.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$id=$_REQUEST['smid'];
$query = "SELECT * from studentmark where smid='".$id."'"; 
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

$id=$_POST['smid'];
$edit_smsecid=$_POST['smsecid']; 
$edit_smsic=$_POST['smsic']; 
$edit_smsc=$_POST['smsc']; 
$edit_smsm=$_POST['smsm']; 



$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$query="UPDATE studentmark SET smsecid='$edit_smsecid',smsic='$edit_smsic',smsc='$edit_smsc', smsm='$edit_smsm' WHERE smid='$id'" ;
mysqli_query($con, $query) or die (mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

<div> 
<form  method="post" action=""> 


<input type="hidden" name="new" value="1" />
<input name="smid" type="hidden" value="<?php echo $row['smid'];?>" />

<div class="input-group">
    <label>SECTION</label>
<select name="smsecid" required value="<?php echo $row['smsecid'];?>"   >
  <option value="1">LEVEL 1 (AGE 4)</option>
  <option value="2">LEVEL 2 (AGE 5)</option>
    <option value="3">LEVEL 3 (AGE 6)</option>
</select>
  </div>
 <div class="input-group">
    <label>STUDENT ID (IC NUMBER)</label>
   <input type="text" name="smsic" required value="<?php echo $row['smsic'];?>" />
  </div>


 
 <div class="input-group">
    <label>SUBJECT CODE </label>
  <select name="smsc" required value="<?php echo $row['smsc'];?>" >
  <option value="BM501">B.MALAYSIA 501</option>
  <option value="ENG502">ENGLISH 502</option>
  <option value="MATH503">MATHEMATICS 503</option>
  <option value="SCN504">SCIENCE 504</option>
  <option value="READ505">READING 505</option>
  <option value="MC506">MUSIC 506</option>
  <option value="ISLAM507">ISLAM EDUCATION 507</option>
   <option value="PHYSICAL508">PHYSICAL EDUCATION 508</option>
</select>
  </div>

<div class="input-group">
    <label>STUDENT MARK</label>
   <input type="text" name="smsm" required value="<?php echo $row['smsm'];?>" />
  </div>

<p><input name="submit" type="submit" value="Update" /></p>

</form>
<?php } ?>
</div>
</div>
</body>
</html>