/*Using a custom method, check the user's email and password
received from a form. If the email and password match "class@example.com" and "class123"
respectively, display a "login successful" message.*/
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<h1>   Enter your details   </h1>
<form action="mail_check_controller.php" method="POST">
    <input type="text" placeholder="Enter your name" name="me"><br><br>
    <input type="text" placeholder="Enter your email" name="m"><br><br>
    <input type="text" placeholder="Enter password" name="ps"><br><br>
    <input type="submit" value="Check " name="btn_check">

</form>

</body>
</html>

