<html>
<head>
	<title>Delete All Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
  <li><a href="adminadd.php">Home</a></li>
  <li><a href="adminsetting.php">User Settings</a></li>
  <li><a href="adminchangepass.php">Change password</a></li>
  <li style="float:right"><a class="active" href="adminlogout.php">Logout</a></li>
</ul>
<div class="header">
	<h2>Check User Login</h2>
</div>
<form method="post" action="">
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="">
	</div>
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
        $search = mysqli_real_escape_string($db,$_POST['name']);
		$sql = "DELETE FROM teacher where name = '$search'";
		$result = mysqli_query($db,$sql);
		if($result){
			echo " Succesfull Deleted";
		}
		else{
            echo "Error in deleting";
            echo mysqli_error($db);
		}
	}

	?>
</form>
</body>
</html>