<!doctype html>
<?php
$servername = "localhost";
$name="root";
$password="";
$dbname="multi_login";;
$id="";
$email="";
$username    =  "";
$password_1  = "";
$user_type="";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 
//connect to mysql database
try{
$conn =mysqli_connect($servername,$name,$password,$dbname);
}catch(MySQLi_Sql_Exception $ex){
echo("error in connecting");
}
//get data from the form
function getData()
{
$data = array();
$data[0]=$_POST['id'];
$data[1]=$_POST['username'];
$data[2]=$_POST['email'];
$data[3]=$_POST['user_type'];
$data[4]=$_POST['password'];

return $data;
}
//search
if(isset($_POST['search']))
{
$info = getData();
$search_query="SELECT * FROM users WHERE id = '$info[0]'";
$search_result=mysqli_query($conn, $search_query);
if($search_result)
{
if(mysqli_num_rows($search_result))
{
while($rows = mysqli_fetch_array($search_result))
{
$id=$rows['id'];
$username    =  $rows['username'];
$email       =  $rows['email'];
$password_1  =  $rows['password'];
$user_type  =  $rows['user_type'];
}
}else{
echo("no data are available");
}
} else{
echo("result error");
}
 
}

//delete
if(isset($_POST['delete'])){
$info = getData();
$delete_query = "DELETE FROM `users` WHERE id = '$info[0]'";
try{
$delete_result = mysqli_query($conn, $delete_query);
if($delete_result){
if(mysqli_affected_rows($conn)>0)
{
echo("data deleted");
}else{
echo("data not deleted");
}
}
}catch(Exception $ex){
echo("error in delete".$ex->getMessage());
}
}
//edit
if(isset($_POST['update'])){
$info = getData();
$update_query="UPDATE `users` SET `username`='$info[1]',email='$info[2]',user_type='$info[3]',password='$info[4]' WHERE id = '$info[0]'";

try{
$update_result=mysqli_query($conn, $update_query);
if($update_result){
if(mysqli_affected_rows($conn)>0){
echo("data updated");
}else{
echo("data not updated");
}
}
}catch(Exception $ex){
echo("error in update".$ex->getMessage());
}
}
 
?>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN - USER</title>
 <link rel="stylesheet" href="../style.css">

  <style>
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

table td, table th {
    border: 1px solid #ddd;
    padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}
table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

</head>
<body>
  <center>
 <table>
 <tr>
  <th>USER ID</th> 
  <th>NAME</th> 
  <th>EMAIL</th>
  <th>USER TYPE</th> 
  <th>PASSWORD</th> 

 </tr>
 <?php
  $sql = "SELECT id, username, email, user_type, password FROM users";


  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["email"]. "</td><td>" .$row["user_type"]."</td><td>".$row["password"]."</td><tr>";   
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</center>
<br>
<br> 
<div class="header">
<h2>ADMIN-USER</h2>
</div>
<form method="post" action="crud.php">
 <div class="input-group">
    <label>ID</label>
   <input type="text" name="id" value="<?php echo $id; ?>">
  </div> <div class="input-group">
    <label>Username</label>
   <input type="text" name="username" value="<?php echo $username; ?>">
  </div>
  <div class="input-group">
    <label>Email</label>
<input type="email" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password">
  </div>
  <div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
<div>
<input type="submit" name="delete" value="Delete">
<input type="submit" name="update" value="Update">
<input type="submit" name="search" value="Find">
 
   <a href="home.php"> HOME </a>
</div>
</form>
</body>
</html>