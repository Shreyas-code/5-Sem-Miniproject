<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "hms";

$con = mysqli_connect($servername, $username, $password,$database);

// Check for connection success
if(!($con))
{
die("error in connecting to DB");
}
else
{
print "<i style='color:green'>connection successfull</i><br />";
}
?>
</body>
</html>