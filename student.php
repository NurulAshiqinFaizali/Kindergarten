<!DOCTYPE html>
<html>
<head>
  <title> Student Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
<h2>STUDENT REGISTRATION</h2>  
</div>
<form method="post" action="connect.php">

  <div class="input-group">
    <label>STUDENT ID (IC NUMBER)</label>
   <input type="text" name="sic" required>
  </div>

   <div class="input-group">
    <label>FIRST NAME</label>
   <input type="text" name="sfn" required>
  </div>

  <div class="input-group">
    <label>LAST NAME</label>
<input type="text" name="sln" required>
  </div>


 <div class="input-group">
    <label>STUDENT GENDER</label>
<select name="sgender" required>
  <option value="female">FEMALE</option>
  <option value="male">MALE</option>
</select>
  </div>

 <div class="input-group">
    <label>STUDENT DATE OF BIRTH </label>
<input type="date" name="sdob" required>
  </div> 

   <div class="input-group">
    <label>STUDENT ADDRESS</label>
<input type="text" name="saddr" required>
  </div>

 <div class="input-group">
    <label>STUDENT ALLERGIC</label>
<input type="text" name="salle" required>
  </div>
  

    <div class="input-group">
    <input type="submit" class="centre" value="REGISTER">
    </div>

    <br>
    <a href="index.php" style="color: black;">Cancel</a>
  
</form>
</body>
</html>