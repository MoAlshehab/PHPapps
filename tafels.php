<?php

$tafel=readline("Welke tafel wil je zien? ");
$begin =readline("Het begin:$begin ");
 $eind=readline("Het eind:$eind ");

echo "\n\nTafel van $tafel:\n";
for ($teller=$begin;$teller<=$eind;$teller++) {
$product=$teller*$tafel;
echo $teller." x ".$tafel." = ".$product."\n";
}
$stop  = "ja";

while ($stop == "ja"){
   echo "Sorry ,ik weet nog niet hoe het moet\n";
    $stop = readline("Wil je een andere tafel zien?[ja/nee]: ");
    $teller++;}


/*
 $tafel=readline("Welke tafel wil je zien? ");
 $begin =readline("Het begin:$begin ");
 $eind=readline("Het eind:$eind ");
 echo "\n\nTafel van $tafel:\n";
 for ($teller=$begin;$teller<=$eind;$teller++)
  
 $product=$teller*$tafel;
 {
 echo $teller." x ".$tafel." = ".$product."\n";
 }*/
?>
