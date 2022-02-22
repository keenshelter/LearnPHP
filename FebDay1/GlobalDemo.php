<?php
$comp = "Accenture";    //Global variable
//$x = 5;
function globvar(){
    $x = 5;
    global $comp;
    echo $comp;
    echo $x;
}
globvar();
echo "I work for ".$comp;

