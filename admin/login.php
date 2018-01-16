<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
	 
	 <?php
session_start();
$conn = mysqli_connect("localhost","root","","blog");
	
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["id"] = $row['id'];
	$_SESSION["username"] = $row['username'];
		header('Location: index.php');
	}
	else
		{
	$message = "Invalid Username or Password!";
	}
}
?>
	 
  <form method="post" action="">
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn"  name="login" value="Login" class="form-submit-button">Login</button>
  	</div>
 
  </form>
</body>
</html>