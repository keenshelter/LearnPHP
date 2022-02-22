<?php
$number = array("One","Two","Three","Stop","Four");
foreach($number as $element){
    if($element == "Stop"){
        continue;
    }
    echo "$element\n";
}