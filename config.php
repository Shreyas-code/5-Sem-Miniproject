<?php
// $mysql_hostname = "localhost";
// $mysql_user = "root";
// $mysql_password = "";
// $mysql_database = "hms";
// $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
// mysqli_select_db($mysql_database, $bd) or die("Could not select database");

$servername = "localhost";
$username = "root";
$password = "";
$database = "hms"; 
$con = mysqli_connect($servername, $username, $password,$database);
$db=mysqli_select_db($con,"hms");

?>