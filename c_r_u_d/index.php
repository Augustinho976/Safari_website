<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home|Login</title>
</head>
<body>
<h1>Login Here</h1>
<form action="lgn_controller.php" method="POST">
    <input type="email" placeholder="Enter your email" name="email"><br><br>
    <input type="password"placeholder="Enter password" name="pass"><br><br>
    <input type="submit" value="Login" name="btn_login">
    <a href="register.php">Register</a>

</form>

</body>
</html>
