<?php
for($n=1;$n<=10;$n++){
    echo "$n\n";
}

echo "\n";

for($i=1;;$i++){
    if($i > 5){
        break;
    }
    echo $i;
}
echo "\n";

$i=1;
for(;;){
    if($i>5){
        break;
    }
    echo $i;
    $i++;
}
echo "\n";

//for($i=1,$j=0;$i<=5;$j += $i, print $i, $i++)

for($i=1;$i<=3;$i++){
    for($j=1;$j<=3;$j++){
        echo "$i    $j\n";
    }
}
?>