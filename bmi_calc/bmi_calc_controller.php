<?php


if(isset($_GET["btn_bmi_calc"])){

    $weight=$_GET["p"];
    $height=$_GET["q"];

    $bmi=($weight/$height)^2;

if ($bmi<18.5){
    echo " Your BMI is $bmi and you are Underweight";

}elseif ($bmi<24.5){
    echo "Your BMI is $bmi and you are Normal weight";
}elseif ($bmi<34.5){
    echo "Your BMI is $bmi and you are Overweight";

}else{
    echo "Your BMI is $bmi and you are Obese";

}



}
