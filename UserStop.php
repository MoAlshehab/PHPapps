<?php
/* $begin=1;
 $maximum=10;
 $tekst="Hallo,World Van deltion hier is Zwolle!!\n";
 for ($teller=$begin;$teller<=$maximum;$teller++){
     echo $tekst;
 }

*/
$stop  = "nee";
$teller = 1;

while ($stop == "nee"){
    echo "Dit is run $teller\n";
    $stop = readline("Wil je stoppen [ja/nee]: ");
    $teller++;}
?>