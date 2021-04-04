<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
       <h1> Register here </h1>
       <form action="reg_controller.php" method="POST">
           <input type="text" placeholder="Name" name="a"><br><br>
           <input type="email" placeholder="Email" name="b"><br><br>
           <input type="password" placeholder="Password" name="c"><br><br>
           <input type="submit" value="Register" name="btn_reg">
           <a href="users.php">View users </a>

       </form>
</body>
</html>
