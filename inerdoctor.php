<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
<?php
$Name=$_POST['Name'];
$Specialization=$_POST['Specialization'];
$ID=$_POST['ID'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "dbshreyas";   


            $con = mysqli_connect($servername, $username, $password,$database);
// if(!($con))
// {
// die("error in connecting to DB");
// }
// else
// {
// print "<i style='color:green'>connection successfull</i><br />";
// }

$db=mysqli_select_db($con,"dbshreyas");
$query="insert into doctab values('$Name','$Specialization',$ID)";
if(!($query))
{
die("error in connecting to DB");
}
else
{
print "<i style='color:green'>Thanks,your information is saved successfull</i><br />";
}
mysqli_query($con,$query);
// $result=mysqli_query($con,"select * from doctor");
// $rows=mysqli_num_rows($result);
// echo "<i style='color:blue'>num of rows inserted into the doctor table are
// $rows</i>";
// echo "<table border='1'><tr><th>Name</th><th>Specialization</th><th>ID</th></tr>";
// for($row=1;$row<=$rows;$row++)
// {
// $rowv=mysqli_fetch_array($result,MYSQLI_ASSOC);
// echo "<tr><td>".$rowv['Name']."</td>";
// echo "<td>".$rowv['Specialization']."</td>";
// echo "<td>".$rowv['ID']."</td></tr>";
// }
// echo "</table>";
mysqli_close($con);
?>
<!-- <h4>Enter user Name to be searched</h4>
<form action="http://localhost/TEST/search.php" method="post">
Enter employee id to be searched:<input type="text" Name="Specialization"/>
<input type="submit" value="Search"/>
<input type="reset" value="reset"/> -->
<!-- </form> -->
</body>
</html>