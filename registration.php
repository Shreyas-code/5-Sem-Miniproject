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

$s="select * from table4 where name='$name'";

$result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
    echo "username already taken";
}
else{
    $reg="insert into table4(name,password) values('$name','$password')";
    mysqli_query($con,$reg);
    echo "Registeration Sucessfull";
}

?>