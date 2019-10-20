<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header("Location: adminlogin.php");
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
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST['name'];
$pass=$_POST['password'];
$sub1=$_POST['sub1'];
$url1=check($_POST['url1']);
$sub2=check($_POST['sub2']);
$url2=check($_POST['url2']);
$sub3=check($_POST['sub3']);
$url3=check($_POST['url3']);
$sub4=check($_POST['sub4']);
$url4=check($_POST['url4']);
$sub5=check($_POST['sub5']);
$url5=check($_POST['url5']);
$sub6=check($_POST['sub6']);
$url6=check($_POST['url6']);
$sub7=check($_POST['sub7']);
$url7=check($_POST['url7']);
$sub8=check($_POST['sub8']);
$url8=check($_POST['url7']);
$sub9=check($_POST['sub9']);
$url9=check($_POST['url9']);
$sub10=check($_POST['sub10']);
$url10=check($_POST['url10']);


$sql = "INSERT INTO teacher (name, password, sub1, url1, sub2, url2, sub3, url3, sub4, url4, sub5, url5, sub6, url6, sub7, url7, sub8, url8, sub9, url9, sub10, url10) VALUES ('$name', '$pass', '$sub1','$url1','$sub2','$url2','$sub3','$url3','$sub4','$url4','$sub5','$url5','$sub6','$url6','$sub7','$url7','$sub8','$url8','$sub9','$url9','$sub10','$url10')";

$result = mysqli_query($conn,$sql);
if($result){
    header("location: adminadd.php");
}

}
function check($var){
    if(!isset($var) || trim($var) == ''){
      return "null";
    }
    return $var;
}

?>