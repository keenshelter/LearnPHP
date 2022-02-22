<?php
function staticvar(){
   static $num1 = 3;        //static variable
   $num2 = 6;               //non-static variable
   
   //increment static var
   $num1++;
   //increment non-static variable
   $num2++;
   echo "Static: ". $num1 ."\n";
   echo "Non-static:" . $num2 ."\n";
}
staticvar();
//second call
staticvar();