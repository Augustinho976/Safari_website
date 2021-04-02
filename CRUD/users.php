<?php
//trying to display emails
//session_start();
//if (isset($_SESSION["email"])){
//    $session_email=$_SESSION["email"];
//}else{
//    session_destroy();
//    header("location:index.php");
//}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<h1 class="text-center">Our users</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>

    <?php
    require_once 'connection.php';
    //prepare select_query
    $select_users = "SELECT * FROM `users` ";
    //execute the select_user query
    $users = mysqli_query($conn, $select_users);
    //use a loop to print th records

    while ($row = mysqli_fetch_assoc($users)){
        $id = $row['id'];
        $name = $row['jina'];
        $email = $row['arafa'];
        $password = $row['siri'];

        echo "<tr>
               <td>$name</td>
               <td>$email</td>
               <td><a href='delete.php?my_id=$id'>Delete</a></td>
               <td><a href='update.php?my_id=$id&my_name=$name&my_email=$email&my_pass=$password'>Update</a></td>

             </tr>";
    }

    ?>
   </table>
        </div>
    </div>
</div>
<a href="logout.php">Logout</a>

</body>
</html>
