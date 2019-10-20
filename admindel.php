<html>
<head>
	<title>Delete All Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
  <li><a href="#adminadd.php">Home</a></li>
  <li><a href="adminsetting.php">User Settings</a></li>
  <li><a href="adminchangepass.php">Change password</a></li>
  <li style="float:right"><a class="active" href="adminlogout.php">Logout</a></li>
</ul>
<div class="header">
	<h2>Delete All Data</h2>
</div>
<form method="post" action="">
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Delete</button>
	</div>
	<?php
	include("config.php");
	session_start();
	if(!isset($_SESSION['login_user'])){
		header("Location: adminlogin.php");
	}
	$name = $_SESSION['login_user'];
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$sql = "DELETE FROM teacher";
		$result = mysqli_query($db,$sql);
		if($result){
			echo " Succesfull Deleted";
		}
		else{
			echo "Error in deleting";
		}
	}

	?>
</form>
</body>
</html>