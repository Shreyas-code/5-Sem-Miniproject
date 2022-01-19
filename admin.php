<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin1.css">

</head>
<body>
    <div class="doc">
    <!-- <img src="staff2.jpg" alt="Img"/> -->

        <i style="color:red;font-size:20pt">ENTER YOUR DETAILS</i><br>
            <form action="adminreg.php" method="post">
                <label for="name">Enter Name:</label><br>
                <input type="text" class="id2" id="name" name="Name"/><br />
                <label for="spe">Enter Your Appointment :</label><br>
                <input type="text" class="id2" id="spe" name="Specialization"/><br />
                <label for="id">Enter Your ID:</label><br>
                <input type="text" class="id2" id="id" name="ID"/><br />



                <input type="submit" class="id1" value="submit details"/>
                <input type="reset" class="id1" value="reset"/>
            </form>
        </div>
</body>
</html>