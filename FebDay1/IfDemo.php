<?php
//$age = 17;
echo "enter age to chk";
$age = (int)readline('enter an integer value');

echo "entered age is $age";
if($age >= 18){
    echo "eligible to vote";
}
else {
    echo "not eligible to vote";
}

$a = 20;
$b = 10;
$c = 40;
if($a > $b && $a > $c){
    echo "a is bigger";
}
elseif($b > $a && $b > $c){
    echo "b is bigger";
}
else 
    {
        echo "c is bigger";
    }
?>
