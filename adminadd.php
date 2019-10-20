<?php
session_start();
if(!isset($_SESSION['login_user'])){
header("Location: adminlogin.php");
}
?>
<html>
<head>
	<title>Admin</title>
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
	<h2>Add new teacher</h2>
</div>
<form method="post" action="insert.php">
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="text" name="password" value="">
    </div>
    <div class="input-group">
		<label>Subject and class 1:</label>
        <input type="text" name="sub1" value="">
        <input type="text" name="url1" value="">
    </div>
    <div class="input-group">
		<label>Subject and class 2:</label>
        <input type="text" name="sub2" value="">
        <input type="text" name="url2" value="">
    </div>
    <div class="input-group">
		<label>Subject and class 3:</label>
        <input type="text" name="sub3" value="">
        <input type="text" name="url3" value="">
    </div>
    <div class="input-group">
		<label>Subject and class 4:</label>
        <input type="text" name="sub4" value="">
        <input type="text" name="url4" value="">
    </div>
    <div class="input-group">
		<label>Subject and class 5:</label>
        <input type="text" name="sub5" value="">
        <input type="text" name="url5" value="">
    </div>
    <div class="input-group">
		<label>Subject and class 6:</label>
        <input type="text" name="sub6" value="">
        <input type="text" name="url6" value="">
    </div>
    <div class="input-group">
		<label>Subject and class 7:</label>
        <input type="text" name="sub7" value="">
        <input type="text" name="url7" value="">
    </div>
    <div class="input-group">
		<label>Subject and class 8:</label>
        <input type="text" name="sub8" value="">
        <input type="text" name="url8" value="">
    </div>
    <div class="input-group">
		<label>Subject and class 9:</label>
        <input type="text" name="sub9" value="">
        <input type="text" name="url9" value="">
    </div>
    <div class="input-group">
		<label>Subject and class 10:</label>
        <input type="text" name="sub10" value="">
        <input type="text" name="url10" value="">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
</form>
</body>
</html>