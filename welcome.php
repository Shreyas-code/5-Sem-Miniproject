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

if (isset($_POST['submit'])) {
    echo "GeeksforGeeks";
}
?>

<div class="con">
<form id="myform" action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type = "submit" name = "submit" value = "Submit">
        </form>
</div>
</body>
</html>