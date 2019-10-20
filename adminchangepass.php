<html>
<head>
	<title>Admin Change password</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
  <li><a href="adminadd.php">Home</a></li>
  <li><a href="adminsetting.php">User Settings</a></li>
  <li><a href="#adminchnagepass.php">Change password</a></li>
  <li style="float:right"><a class="active" href="adminlogout.php">Logout</a></li>
</ul>
<div class="header">
	<h2>Change password</h2>
</div>
<form method="post" action="">
	<div class="input-group">
		<label>Old password</label>
		<input type="password" name="passold" value="">
	</div>
	<div class="input-group">
		<label>New Password</label>
		<input type="password" name="pass" value="">
    </div>
    <div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="cpass" value="">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Change</button>
    </div>
    <?php
    include("config.php");
    session_start();
    if(!isset($_SESSION['login_user'])){
		header("Location: adminlogin.php");
	}
    $inserted="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $old = mysqli_real_escape_string($db,$_POST['passold']);
        $pass = mysqli_real_escape_string($db,$_POST['pass']);
        $cpass = mysqli_real_escape_string($db,$_POST['cpass']);
        $name= $_SESSION['login_user'];
        $sql = "SELECT password FROM admin WHERE name = '$name'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $inserted=$row["password"];
        if($inserted==$old){
            if($pass==$cpass){
                $sql1 = "UPDATE admin SET password='$pass' WHERE name = '$name'";
                if(mysqli_query($db,$sql1)){
                    echo "Password updated successfully";
                }
                else {
                    echo "Error updating record".$db->error;
                }
            }
            else{
                echo "Password is not matching.";
            }
        }
        else{
            echo "Incorrect password.";
        }
    }
?>
</form>
</body>
</html>