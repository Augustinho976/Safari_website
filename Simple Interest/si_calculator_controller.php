<?php
if (isset($_GET["btn_si_calc"])){
    $name= $_GET["jina"];
    $p = $_GET["prcp"];
    $r=$_GET["rt"];
    $t=$_GET["tm"];

    $interest=($p*$r*$t)/100;
    echo "Hello $name ,your interest is $interest.";
}
