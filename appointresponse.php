<?php
session_start();
// header('location:login.php');   
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbshreyas"; 
$con = mysqli_connect($servername, $username, $password,$database);

if(!($con))
{
    die("error in connecting to DB");
}
else
{
    print "<i style='color:green'>connection successfull</i><br />";
}
$db=mysqli_select_db($con,"dbshreyas");

$name=$_POST['patient_name'];
$gender=$_POST['gender'];
$number=$_POST['mobile_number'];
$dob=$_POST['birthday'];
$address=$_POST['city'];
$email=$_POST['email'];
$scheudule=$_POST['country'];
// $type=$_POST['test1'];
$type=$_POST['country1'];

$db=mysqli_select_db($con,"dbshreyas");
$query="insert into table7 values('$name','$gender','$number','$dob','$address','$email','$scheudule','$type')";
mysqli_query($con,$query);
$result=mysqli_query($con,"select * from table7");
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
// $rows=mysqli_num_rows($result);
// echo "<i style='color:blue'>num of rows inserted into the table3 table are $rows</i>";
// echo "<table border='1'><tr><th>Name</th><th>Gender</th><th>Number</th><th></th></tr>";
// echo "<table border='1'><tr><th>Name</th><th>Gender</th><th>Number</th><th>Date</th><th>city</th>
// <th>email</th><th>Schedule</th><th>Type</th></tr>";
// for($row=1;$row<=$rows;$row++)
// {
// $rowv=mysqli_fetch_array($result,MYSQLI_ASSOC);
// echo "<tr><td>".$rowv['patient_name']."</td>";
// echo "<td>".$rowv['gender']."</td>";
// echo "<td>".$rowv['mobile_number']."</td>";
// echo "<td>".$rowv['birthday']."</td>";
// echo "<td>".$rowv['city']."</td>";
// echo "<td>".$rowv['email']."</td>";
// echo "<td>".$rowv['selector1']."</td>";
// echo "<td>".$rowv['test1']."</td></tr>";
// }
// echo "</table>";
mysqli_close($con);
?>