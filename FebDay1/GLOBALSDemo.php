<?php
$num1 = 5;  //global variables
$num2 = 10;

function globalvar(){
    $sum = $GLOBALS['num1']+$GLOBALS['num2'];
    echo "sum of global var is: " .$sum;
}
globalvar();
?>