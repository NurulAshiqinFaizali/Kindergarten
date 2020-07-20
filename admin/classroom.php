<!DOCTYPE html>
<html>
<head>
  <title> Classroom</title>
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
<h2>CLASSROOM</h2>  
</div>
<form method="post" action="connect6.php">
   <div class="input-group">
    <label>CLASSROOM NAME</label>
   <input type="text" name="crn" required>
  </div>
 <div class="input-group">
    <label>TEACHER ID </label>
   <input type="text" name="ctid" required>
  </div>


    <div class="input-group">
    <input type="submit" value="REGISTER">
    </div>
  
    <a href="home.php" style="color: red;">HOME</a>
  
</form>
</body>
</html>