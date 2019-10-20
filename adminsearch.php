<html>
<head>
	<title>Search</title>
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
		<button type="submit" class="btn" name="register_btn">Search</button>
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
		$sql = "SELECT name, password,sub1, sub2, sub3, sub4, sub5, sub6, sub7, sub8, sub9, sub10 FROM teacher where name = '$search' ";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		$user = $row["name"];
		$pass = $row["password"];
		echo "<h4> Name:".$user. "</h4> <br>";
		echo "<h4> Password:".$pass. "</h4><br> ";
		if ($result->num_rows > 0) {
			echo "<table><tr><th>Subject</th></tr>";
			while($count--) {
				$sub1=$row["sub1"];
				
				if($sub1=="null"){
					break;
				}
				echo '<tr><td>'.$sub1.'</a></td></tr>';

				$sub2=$row["sub2"];
				
				if($row["sub2"]=="null"){
					break;
				}
				echo '<tr><td>'.$sub2.'</a></td></tr>';
				$sub3=$row["sub3"];
				
				if($row["sub3"]=="null"){
					break;
				}
				echo '<tr><td>'.$sub3.'</a></td></tr>';
				$sub4=$row["sub4"];
				
				if($row["sub4"]=="null"){
					break;
				}
				echo '<tr><td>'.$sub4.'</a></td></tr>';
				$sub5=$row["sub5"];
				
				if($row["sub5"]=="null"){
					break;
				}
				echo '<tr><td>'.$sub5.'</a></td></tr>';
				$sub6=$row["sub6"];
				
				if($row["sub6"]=="null"){
					break;
				}
				echo '<tr><td>'.$sub6.'</a></td></tr>';
				$sub7=$row["sub7"];
			
				if($row["sub7"]=="null"){
					break;
				}
				echo '<tr><td>'.$sub7.'</a></td></tr>';
				$sub8=$row["sub8"];
				
				if($row["sub8"]=="null"){
					break;
				}
				echo '<tr><td>'.$sub8.'</a></td></tr>';
				$sub9=$row["sub9"];
				
				if($row["sub9"]=="null"){
					break;
				}
				echo '<tr><td>'.$sub9.'</a></td></tr>';
				$sub10=$row["sub10"];
				
				if($row["sub10"]=="null"){
					break;
				}
				echo '<tr><td>'.$sub10.'</a></td></tr>';
			}
		}
			
			echo "</table>";
		}
?>
	
</form>
</body>
</html>