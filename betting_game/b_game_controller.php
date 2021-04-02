<?php
if (isset($_POST["btn_result"])) {

    $name = $_POST["n"];
    $number = $_POST["num1"];
    //$second_number = $_POST["num2"];
    function bet($na, $nu)
    {
        $lucky = 0;
        $lucky_two = 3;

        if ($nu == $lucky || $nu == $lucky_two) {
            echo "Congrats $na, you WON!!!";
        } else {
            echo "Oooops $na , you LOST!";
        }
    }

    bet($name, $number);

}