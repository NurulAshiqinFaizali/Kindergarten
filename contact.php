<!DOCTYPE html>
<html>
<head>
  <title> Emergency Contact Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
<h2>EMERGENCY CONTACT</h2>  
</div>
<form method="post" action="connect1.php">

  <div class="input-group">
    <label>STUDENT ID (IC NUMBER)</label>
   <input type="text" name="cic" required>
  </div>

   <div class="input-group">
    <label>CONTACT NAME</label>
   <input type="text" name="cn" required>
  </div>

  <div class="input-group">
    <label>CONTACT ID</label>
<input type="text" name="cid" required>
  </div>


 <div class="input-group">
    <label>CONTACT GENDER</label>
<select name="cgender" required>
  <option value="female">FEMALE</option>
  <option value="male">MALE</option>
</select>
  </div>

   <div class="input-group">
    <label>TELEPHONE NUMBER</label>
<input type="text" name="ctn" required>
  </div>

 <div class="input-group">
    <label>OFFICE NUMBER</label>
<input type="text" name="con" required>
  </div>


 <div class="input-group">
    <label>CONTACT JOB</label>
<input type="text" name="cjob" required>
  </div>

  <div class="input-group">
    <label>WORK ADDRESS</label>
<input type="text" name="cwork" required>
  </div>
  
  <div class="input-group">
    <label>CONTACT SALARY</label>
<select name="csalary" required>
  <option value="RM1000-RM3000">RM1000-RM3000</option>
  <option value="RM3001-RM5000">RM3001-RM5000</option>
   <option value="RM5001-RM10,000">RM5001-RM10,000</option>
  <option value="RM10,001 AND ABOVE">RM10,001 AND ABOVE</option>
</select>
  </div>

    <div class="input-group">
    <input type="submit" value="REGISTER">
    </div>
    <br>
    <a href="index.php" style="color: black;">Cancel</a>
    
</form>
</body>
</html>