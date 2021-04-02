<?php
if(isset($_POST["btn_check"])) {
    $name = $_POST["me"];
    $email = $_POST["m"];
    $password = $_POST["ps"];
function msg($e,$p){
    if($e=="class@example.com"&& $p=="class123"){
        echo"Login successfully";
    }

}
msg($email,$password);
}