<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = mysqli_real_escape_string($db,$_POST['name']);
	$pass = mysqli_real_escape_string($db,$_POST['password']);
	$sql = "SELECT id FROM admin WHERE name = '$name' and password = '$pass'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($count == 1) {
		$_SESSION['login_user'] = $name;
		header("location: adminadd.php");
	   }
	   else {
		$error = "Your Login Name or Password is invalid";
	 }
	}
?>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
	<h2>Admin Login</h2>
</div>
<form method="post" action="">
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" value="">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	
</form>
</body>
</html>