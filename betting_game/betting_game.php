/*Display the user's name and the result a betting game that has only two lucky numbers
of your choice. N/B Embed the login on a custom method*/
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
<h1>   Enter your name $ number </h1>
<form action="b_game_controller.php" method="POST">
    <input type="text" placeholder="Enter your name" name="n"><br><br>
    <input type="text" placeholder="Enter your number" name="num1"><br><br>

    <input type="submit" value="Bet " name="btn_result">

</form>

</body>
</html>


