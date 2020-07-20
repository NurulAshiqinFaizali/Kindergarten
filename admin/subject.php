<!DOCTYPE html>
<html>
<head>
  <title> Subject Registration</title>
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
<h2>SUBJECT</h2>  
</div>
<form method="post" action="connect3.php">
 <div class="input-group">
    <label>SUBJECT CODE </label>
  <select name="scode" required>
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
<select name="sn" required>
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
<input type="text" name="stid" required>
  </div>

    <div class="input-group">
    <input type="submit" value="REGISTER">
    </div>
  
  
    <a href="home.php" style="color: red;">HOME</a>
  
</form>
</body>
</html>