<?php
echo "Eisen: Jaartal moet tussen 100 en 200\n";
$jaar = readline("Jaar: ");
if($jaar<100|| $jaar>200){
    echo "Door u gevoerde jaar zit niet tussen de eisen";
    exit;
}
$maand = readline("Maand: ");
if($maand>12 || $maand<0){
    echo "Door u gevoerde maand klopt niet";
    exit;
}
$dag = readline("dag: ");
if($dag<0 || $dag>31){
    echo "Door u gevoerde dag klopt niet";
    exit;
}
$checkDate = date_create($jaar."-".$maand."-".$dag);
dagenVerschil($checkDate);
function dagenVerschil($checkDate){
    $diff=date_diff(date_create(date("Y-m-d")),$checkDate);
    echo $diff->days." dagen";
}
?>