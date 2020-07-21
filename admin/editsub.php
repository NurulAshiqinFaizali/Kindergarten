<?php
include('../functions.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$id=$_REQUEST['scid'];
$query = "SELECT * from subject where scid='".$id."'"; 
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
$id=$_POST['scid'];
$edit_scode=$_POST['scode']; 
$edit_sn=$_POST['sn']; 
$edit_stid=$_POST['stid'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$query="UPDATE subject SET scode='$edit_scode',sn='$edit_sn',stid='$edit_stid' WHERE scid='$id'" ;
mysqli_query($con, $query) or die (mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

<div> 
<form  method="post" action=""> 


<input type="hidden" name="new" value="1" />
<input name="scid" type="hidden" value="<?php echo $row['scid'];?>" />

<div class="input-group">
    <label>SUBJECT CODE </label>
  <select name="scode" required value="<?php echo $row['scode'];?>" />
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
    <label>SUBJECT NAME</label>
<select name="sn" required value="<?php echo $row['sn'];?>" />
  <option value="B.MALAYSIA">B.MALAYSIA</option>
  <option value="ENGLISH">ENGLISH</option>
  <option value="MATHEMATICS">MATHEMATICS</option>
  <option value="SCIENCE">SCIENCE</option>
  <option value="READING">READING</option>
  <option value="MUSIC">MUSIC</option>
  <option value="ISLAM EDUCATION">ISLAM EDUCATION</option>
   <option value="PHYSICAL EDUCATION">PHYSICAL EDUCATION</option>
</select>
  </div>
 

  <div class="input-group">
    <label>TEACHER ID</label>
<input type="text" name="stid" required value="<?php echo $row['stid'];?>" />
  </div>
<p><input name="submit" type="submit" value="Update" /></p>

</form>
<?php } ?>
</div>
</div>
</body>
</html>