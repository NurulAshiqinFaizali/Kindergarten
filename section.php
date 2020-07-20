<!DOCTYPE html>
<html>
<head>
  <title> Section Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
<h2>SECTION</h2>  
</div>
<form method="post" action="connect2.php">
 <div class="input-group">
    <label>STUDENT ID (IC NUMBER)</label>
   <input type="text" name="secic" required>
  </div>

  <div class="input-group">
    <label>SECTION</label>
<select name="secnum" required>
  <option value="1">LEVEL 1 (AGE 4)</option>
  <option value="2">LEVEL 2 (AGE 5)</option>
    <option value="3">LEVEL 3 (AGE 6)</option>
</select>
  </div>
 

   <div class="input-group">
    <label>ROOM NUMBER</label>
    BETWEEN (1-5) 
    <input type="number" name="secrid" min="1" max="5">

  </div>

  <div class="input-group">
    <label>TEACHER ID</label>
<input type="text" name="sectid" required>
  </div>

    <div class="input-group">
    <input type="submit" value="REGISTER">
    </div>

    <a href="index.php" style="color: black;">HOME</a>
    <br>
    <a href="index.php?logout='1'" style="color: red;">LOGOUT</a>
  
</form>
</body>
</html>