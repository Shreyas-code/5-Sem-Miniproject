<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        

            $name =$_POST['name'];
            $age =$_POST['age'];
            $gender =$_POST['gender'];
            $email =$_POST['email'];
            $phone =$_POST['phone'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "dbshreyas";
            
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
            
          
            // $other =$_POST['other'];
            
            
            
// $sql="INSERT INTO `table1`.`table1` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`)
//  VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());" ;

// echo $sql;

// if($con->query($sql) == true){
//     echo "Successfully inserted";
// }
//     else{
//         echo "ERROR: $sql <br> $con->error";
//     }
//     $con->close();  

// }

$db=mysqli_select_db($con,"dbshreyas");
$query="insert into table1 values('$name', $age, '$gender', '$email', '$phone')";
mysqli_query($con,$query);
$result=mysqli_query($con,"select * from table1");
$rows=mysqli_num_rows($result);
echo "<i style='color:blue'>num of rows inserted into the table1 table are
$rows</i>";
echo "<table border='1'><tr><th>Name</th><th>age</th><th>exp</th></tr>";
for($row=1;$row<=$rows;$row++)
{
$rowv=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "<tr><td>".$rowv['name']."</td>";
echo "<td>".$rowv['age']."</td>";
echo "<td>".$rowv['gender']."</td>";
echo "<td>".$rowv['email']."</td>";
echo "<td>".$rowv['phone']."</td></tr>";
// echo "<td>".$rowv['other']."</td></tr>";
}
echo "</table>";
mysqli_close($con);

?>
    </div>
    <h1>Welcome</h1>
        <p>yo ma wassup</p>

        <form action="pro.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <!-- <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea> -->
            <input type="submit" value="submit" name="create"/><br/>
        </form>
</body>
</html>