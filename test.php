<?php

$leeftijd =readline("Geef je leeftijd: ");
if($leeftijd< 9 || $leeftijd >118)
exit;

if($leeftijd ==62){
  
    echo"waarschuwing nog 5 jaar voor dat u 67 wordt";
    }


elseif($leeftijd==10 ||$leeftijd==16 || $leeftijd==18 || $leeftijd==50 ||$leeftijd==67 ||$leeftijd==100 ){
    echo"Gefeliciteerd ";
if($leeftijd ==62){
  
echo"waarschuwing nog 5 jaar voor dat u 67 wordt";
}
}
/*
function test(){
    echo "het is een test";
}
test();*/
?>