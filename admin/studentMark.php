<!DOCTYPE html>
<html>
<head>
  <title> Section Registration</title>
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
<h2>SECTION</h2>  
</div>
<form method="post" action="connect8.php">
    <div class="input-group">
    <label>SECTION</label>
<select name="smsecid" required>
  <option value="1">LEVEL 1 (AGE 4)</option>
  <option value="2">LEVEL 2 (AGE 5)</option>
    <option value="3">LEVEL 3 (AGE 6)</option>
</select>
  </div>
 <div class="input-group">
    <label>STUDENT ID (IC NUMBER)</label>
   <input type="text" name="smsic" required>
  </div>


 
 <div class="input-group">
    <label>SUBJECT CODE </label>
  <select name="smsc" required>
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
   <input type="text" name="smsm" required>
  </div>


    <div class="input-group">
    <input type="submit" value="REGISTER">
    </div>
  
  
    <a href="home.php" style="color: red;">HOME</a>
  
</form>
</body>
</html>