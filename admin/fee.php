<!DOCTYPE html>
<html>
<head>
  <title> Fee</title>
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
<h2>FEE</h2>  
</div>
<form method="post" action="connect5.php">
   <div class="input-group">
    <label>STUDENT ID (IC NUMBER)</label>
   <input type="text" name="fic" required>
  </div>
 <div class="input-group">
    <label>FEE AMOUNT </label>
   <input type="text" name="fa" required>
  </div>

  <div class="input-group">
    <label>FEE STATUS</label>
<select name="fs" required>
  <option value="PAID">PAID</option>
  <option value="UNPAID">UNPAID</option>
</select>
  </div>

  <div class="input-group">
    <label>FEE DATE</label>
<input type="date" name="fdate" required>
  </div>


    <div class="input-group">
    <input type="submit" value="REGISTER">
    </div>
  
    <a href="home.php" style="color: red;">HOME</a>
  
</form>
</body>
</html>