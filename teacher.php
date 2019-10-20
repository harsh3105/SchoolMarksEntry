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
<div class="header">
	<h2>Welcome name</h2>
</div>
<div class="tableview">
<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header("Location: teacherslogin.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_SESSION['login_user'];
$sql = "SELECT sub1, url1, sub2, url2, sub3, url3, sub4, url4, sub5, url5, sub6, url6, sub7, url7, sub8, url8, sub9, url9, sub10, url10 FROM teacher where name = '$name' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Subject</th></tr>";
    while($row = $result->fetch_assoc()) {
        $sub1=$row["sub1"];
        $url1=$row["url1"];
        if($sub1=="null"){
            break;
        }
        echo '<tr><td><a href="teacherview.php?url='.$url1.'">'.$sub1.'</a></td></tr>';

        $sub2=$row["sub2"];
        $url2=$row["url2"];
        if($row["sub2"]=="null"){
            break;
        }
        echo '<tr><td><a href="teacherview.php?url='.$url2.'">'.$sub2.'</a></td></tr>';
        $sub3=$row["sub3"];
        $url3=$row["url3"];
        if($row["sub3"]=="null"){
            break;
        }
        echo '<tr><td><a href="teacherview.php?url='.$url3.'">'.$sub3.'</a></td></tr>';
        $sub4=$row["sub4"];
        $url4=$row["url4"];
        if($row["sub4"]=="null"){
            break;
        }
        echo '<tr><td><a href="teacherview.php?url='.$url4.'">'.$sub4.'</a></td></tr>';
        $sub5=$row["sub5"];
        $url5=$row["url5"];
        if($row["sub5"]=="null"){
            break;
        }
        echo '<tr><td><a href="teacherview.php?url='.$url5.'">'.$sub5.'</a></td></tr>';
        $sub6=$row["sub6"];
        $url6=$row["url6"];
        if($row["sub6"]=="null"){
            break;
        }
        echo '<tr><td><a href="teacherview.php?url='.$url6.'">'.$sub6.'</a></td></tr>';
        $sub7=$row["sub7"];
        $url7=$row["url7"];
        if($row["sub7"]=="null"){
            break;
        }
        echo '<tr><td><a href="teacherview.php?url='.$url7.'">'.$sub7.'</a></td></tr>';
        $sub8=$row["sub8"];
        $url8=$row["url8"];
        if($row["sub8"]=="null"){
            break;
        }
        echo '<tr><td><a href="teacherview.php?url='.$url8.'">'.$sub8.'</a></td></tr>';
        $sub9=$row["sub9"];
        $url9=$row["url9"];
        if($row["sub9"]=="null"){
            break;
        }
        echo '<tr><td><a href="teacherview.php?url='.$url9.'">'.$sub9.'</a></td></tr>';
        $sub10=$row["sub10"];
        $url10=$row["url10"];
        if($row["sub10"]=="null"){
            break;
        }
        echo '<tr><td><a href="teacherview.php?url='.$url10.'">'.$sub10.'</a></td></tr>';
        
      
    }
}
    
    echo "</table>";


$conn->close();
?>
</div>

</body>
</html>