<?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            
            
            $conn = mysqli_connect($servername, $username, $password);
            // if(!$conn){
            //     die("connection to this database failed due to" . mysqli_connect_error());
            // }
            // else{ 
            //     echo "Connection was successful";
            // }

            // //create a database
            // $sql= "CREATE DATABASE shreyas7";
            // mysqli_query($conn,$sql);

            $sql = "CREATE DATABASE dbshreyas";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}
            
?>