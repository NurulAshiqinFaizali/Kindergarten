<!DOCTYPE html>
<html>
<head>
  <title> Teacher Registration</title>
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
<h2>TEACHER</h2>  
</div>
<form method="post" action="connect4.php">
 <div class="input-group">
    <label>TEACHER ID </label>
   <input type="text" name="tidnum" required>
  </div>

  <div class="input-group">
    <label>TEACHER NAME</label>
<input type="text" name="tn" required>
  </div>

    <div class="input-group">
    <input type="submit" value="REGISTER">

    </div>

    <a href="home.php" style="color: red;">HOME</a>
  
</form>
</body>
</html>