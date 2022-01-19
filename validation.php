<?php
session_start();
// header('location:login.php');

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbshreyas"; 
$con = mysqli_connect($servername, $username, $password,$database);
$db=mysqli_select_db($con,"dbshreyas");

$name = $_POST['user'];
$password = $_POST['password'];

$s="select * from table4 where name='$name' && password='$password'";

$result = mysqli_query($con,$s);


$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['username'] = $name;
    header('location:appointment.php');
}
else{
    header('location:login.php');
}

?>