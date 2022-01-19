<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style4.css">   
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
          background-image: url('staff2.jpg');
        }
        </style>
</head>
<body>
    <h2>Register Before You Login!!!</h2>
    <!-- <img src="slider-image2.jpg" alt="Flowers in Chania"> -->
    <!-- <div style="background-image: url('staff2.jpg');"> -->
    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login Here</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <!-- <div class="btn btn-primary"><span><a href="appointment.php">Login</a></span></div> -->
                </form>
            </div>

            <div class="col-md-6 login-right">
                <h2>Regiter Here</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
        </div>
    </div>
<!-- </div> -->
</body>
</html>