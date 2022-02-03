<?php
$door = "ja";
while ($door == "ja"){
$tafel=readline("Welke tafel wil je zien? ");
$begin =readline("Het begin: ");
 $eind=readline("Het eind: ");

echo "\n\nTafel van $tafel:\n";
for ($teller=$begin;$teller<=$eind;$teller++) {
$product=$teller*$tafel;
echo $teller." x ".$tafel." = ".$product."\n";
}

    $door= readline("Wil je een andere tafel zien?[ja/nee]: ");
    $teller;}


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
