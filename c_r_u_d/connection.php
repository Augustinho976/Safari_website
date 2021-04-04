<?php
$hostname="localhost";
$username="root";
$password="";
$database="our_class";

//connect to the database
$conn = mysqli_connect($hostname,$username,$password,$database);

//check if connection to database fail
if(!isset($conn)){
    die("Connection failed");
}
