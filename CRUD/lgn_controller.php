<?php
if (isset($_POST["btn_login"])){

    require_once 'connection.php';
    $email=$_POST["email"];
    $pass=$_POST["pass"];

    $pass=md5($pass);

    //prepare the select query
    $select_query="SELECT * FROM `users` WHERE arafa='$email',siri='$pass'";
    $users=mysqli_query($conn,$select_query);
    $num_of_users=mysqli_num_rows($users);

    if ($num_of_users>0){

        session_start();

        $_SESSION["email"]= $email; //can access even name

        header("location:users.php");

    }else{

        header("location:users.php");
    }

}
