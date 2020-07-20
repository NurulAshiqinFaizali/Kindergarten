<!DOCTYPE html>
<html>
<head>
  <title> Attendance Registration</title>
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
<h2>ATTENDANCE</h2>  
</div>
<form method="post" action="connect7.php">
 <div class="input-group">
    <label>STUDENT ID (IC NUMBER)</label>
   <input type="text" name="aic" required>
  </div>

  <div class="input-group">
    <label>SECTION</label>
<select name="asid" required>
  <option value="1">LEVEL 1 (AGE 4)</option>
  <option value="2">LEVEL 2 (AGE 5)</option>
    <option value="3">LEVEL 3 (AGE 6)</option>
</select>
  </div>
 

   <div class="input-group">
    <label>ABSENCE DATE</label>
   
    <input type="date" name="adate">

  </div>

  <div class="input-group">
    <label>ABSENCE REASON</label>
<input type="text" name="areason" required>
  </div>

    <div class="input-group">
    <input type="submit" value="REGISTER">
    </div>
   
    <a href="home.php" style="color: red;">HOME</a>
  
</form>
</body>
</html>