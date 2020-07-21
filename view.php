<?php 
	include('functions.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    

    <?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>


<?php  if (isset($_SESSION['user'])) : ?>
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sel_query="Select * from student";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<p>Student Info</p>
    <ol>
        <li><em>Student ID:</em> <?php echo $row["sic"]; ?></li>
        <li><em>First Name:</em> <?php echo $row["sfn"]; ?></li>
        <li><em>Last Name:</em> <?php echo $row["sln"]; ?></li>
        <li><em>Gender:</em> <?php echo $row["sgender"]; ?></li>
        <li><em>Date of Birth:</em> <?php echo $row["sdob"]; ?></li>
        <li><em>Address:</em> <?php echo $row["saddr"]; ?></li>
        <li><em>Allergic:</em> <?php echo $row["salle"]; ?></li>
    </ol>

<?php  } ?>


<br>


<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sel_query="Select * from contact";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<p>Contact  Info</p>
    <ol>
        <li><em>Student ID:</em> <?php echo $row["cic"]; ?></li>
        <li><em>Contact Name:</em> <?php echo $row["cn"]; ?></li>
        <li><em>Contact ID:</em> <?php echo $row["cid"]; ?></li>
        <li><em>Contact Gender:</em> <?php echo $row["cgender"]; ?></li>
        <li><em>Contact Phone Number :</em> <?php echo $row["ctn"]; ?></li>
        <li><em>Contact Office Number:</em> <?php echo $row["con"]; ?></li>
        <li><em>Contact Job:</em> <?php echo $row["cjob"]; ?></li>
        <li><em>Contact Work:</em> <?php echo $row["cwork"]; ?></li>
        <li><em>Contact Salary:</em> <?php echo $row["csalary"]; ?></li>
    </ol>
    <?php  } ?>

<br>


<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "multi_login";

// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sel_query="Select * from section";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<p>Section Info</p>
    <ol>
        <li><em>Student ID:</em> <?php echo $row["secic"]; ?></li>
        <li><em>Section:</em> <?php echo $row["secnum"]; ?></li>
        <li><em>Room Number:</em><?php echo $row["secrid"]; ?></li>
        <li><em>Teacher ID:</em> <?php echo $row["sectid"]; ?></li>
    </ol>


    <?php  } ?>
   



    <br>
						<a href="index.php" style="color: black;">HOME</a>
			
						<br>
                        
</body>
</html>