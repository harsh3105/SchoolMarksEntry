<?php
	session_start();
	if(!isset($_SESSION['login_user'])){
		header("Location: teacherslogin.php");
	}
    if(isset($_GET["url"]))
    {
        $data = $_GET["url"];
    }
?>
<html>
<head>
	<title>Marks Entry</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
  <li><a href="teacher.php">Home</a></li>
  <li><a href="teacherchangepass.php">Change password</a></li>
  <li style="float:right"><a class="active" href="teacherlogout.php">Logout</a></li>
</ul>
<iframe src="<?php echo $data?>" frameborder="0"></iframe>
</body>
</html>