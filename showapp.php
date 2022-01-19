
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
/* table, td, th {
  border: 1px solid black;
  padding: 15px;
}
td {
  text-align: center;
}
tr:nth-child(even) {background-color: #f2f2f2;}
table {
    width: 100%;
    border-collapse: collapse;
} */
table {
    border-collapse: collapse;
    width: 100%;
}

table,th, td {
    text-align: left;
    padding: 15px;
}
td,th {
    text-align: center;
}
tr:hover {background-color: yellow;}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: blue;
  color: white;
}
</style>
</head>
<body>
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

// $name=$_POST['patient_name'];
// $gender=$_POST['gender'];
// $number=$_POST['mobile_number'];
// $dob=$_POST['birthday'];
// $address=$_POST['city'];
// $email=$_POST['email'];
// $scheudule=$_POST['country'];
// // $type=$_POST['test1'];
// $type=$_POST['country1'];

// $db=mysqli_select_db($con,"dbshreyas");
// $query="insert into table7 values('$name','$gender','$number','$dob','$address','$email','$scheudule','$type')";
// mysqli_query($con,$query);
$result=mysqli_query($con,"select * from table7");
// if($result){
//     echo "The record has been inserted successfully successfully!<br>";
// }
// else{
//     echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
// }
$rows=mysqli_num_rows($result);
echo "<i style='color:blue'>num of rows inserted into the table7 table are $rows</i>";
// echo "<table border='1'><tr><th>Name</th><th>Gender</th><th>Number</th><th></th></tr>";
// <div class="tab">
echo "<table ><tr><th>Name</th><th>Gender</th><th>Number</th><th>Date</th><th>city</th>
<th>email</th><th>Schedule</th><th>Type</th></tr>";
for($row=1;$row<=$rows;$row++)
{
$rowv=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "<tr><td>".$rowv['name']."</td>";
echo "<td>".$rowv['gender']."</td>";
echo "<td>".$rowv['number']."</td>";
echo "<td>".$rowv['dob']."</td>";
echo "<td>".$rowv['address']."</td>";
echo "<td>".$rowv['email']."</td>";
echo "<td>".$rowv['schedule']."</td>";
// echo "<td>".$rowv['selector1']."</td>";
echo "<td>".$rowv['type']."</td></tr>";
// echo "<td>".$rowv['test1']."</td></tr>";
}
echo "</table>";
// </div>
mysqli_close($con);
?>

</body>
</html>