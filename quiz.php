<?php 
$i=1;
$random = rand(1,100);
echo $random;
$raden =readline ("Raad een getal tussen 1 , 100:\n");
while($raden!=$random){

    if($raden< 1 || $raden>100){
        exit();
    }
 
    if($raden<$random){
        echo("Het getal is hooger dan wat je geraad\n");
    }

    if($raden>$random){
        echo("Het getal is lager dan wat je geraad\n");
    }
     if($raden=="stop" || $raden=="klaar"){
            exit();
    }
    echo("Je mag nog een keer raden\n");{
    $raden =readline ("Raad een getal tussen 1 , 100:\n");
    $i++;
}

}
echo ("jij hebt na ".$i." keer het juiste getal geraden\n");
?>