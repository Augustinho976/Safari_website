<?php
if(isset($_POST["btn_reg"])){
    $name=$_POST["a"];
    $email=$_POST["b"];
    $password=$_POST["c"];

    //encrypt the password
    $pass=md5($password);// if we say password it wont be reflected on the
    // database because in the connection file it is defined as empty

//connect to the database to save data
    require_once 'connection.php';


    //prepare insert query
    $insert_query="INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null, '$name ',' $email','$pass')";

    //execute the insert query using mysqli_query() method
    $save = mysqli_query($conn,$insert_query);

//check if saving was successful

    if (isset($save)){
        echo "Saving successful.";
    }else{
        echo "Saving failed.";
    }

}
