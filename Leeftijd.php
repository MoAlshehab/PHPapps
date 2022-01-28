<?php 
$leeftijd = 27;
$ouderdanzestien = $leeftijd - 16;
echo "je bent ".$ouderdanzestien. "jaar ouder dan 16\n";
{echo "<br>";}
$jongerdanvijftig = 50- $leeftijd ;
echo "je bent" .$jongerdanvijftig."jaar jonger dan 50 \n";
{echo "<br>";}
$jongerdanvijfenzeventig = 75-$leeftijd ;
echo "jij bent".$jongerdanvijfenzeventig. "jaar jonger dan 75\n";

/* hIEr KRIJG IK HET OF HET FOUT IS OF NIET 1111
$data =1.0;
$check =is_float($data);
var_dump($check);
{echo "<br>";}*/
// hET IS EEN TESt VAN (IF ) HET IS GELUKT EIGENLIJK 

$oke="Mo eerste code";
if($oke =="Mo eerste code")
{echo "het is goed";}
else{echo"het is fout";}
{echo "<br>";}

/* hier ga ik de switch case leren 1111
$kleur =1;
switch($kleur){
    case 1:
        echo"<style> body{
            background: red;
            color: white;
        } </style>";
        echo "<h1> het is een test voor de switch case</h1>";
break;
case 2:
    echo"<style> body{
        background: green;
    } </style>";
break;
case 5:
    echo"<style> body{
        background: black;
    } </style>";
break;
} */


/* het is rekenen met getallen 1111
$getal1 =5;
if($getal1 >= 100){
echo"het is duur";}
elseif($getal1 >= 90){
echo"het is nog steeds duur";}
elseif($getal1 >= 80){
echo"het oke";}
elseif($getal1 >= 50){
echo"het is heel goed ";}
elseif($getal1 >= 40){
echo"ik ga hem kopen";}
elseif($getal1 >= 10){
echo"ik geloof  het niet";}
else{echo"het is raar";} */


/*dat is de eerste manier vad tafel 111
$telen=1;
while($telen <=10){
    $ruseltaat = $telen *9;
echo "<h1>$telen * 9 = $ruseltaat </h1>";
++$telen;
}*/


/*DAT IS DE TWEEDE MANIET OOK 2222
$telen1=1;
while($telen1<=6){
echo "<h1> $telen1 * 9 =" . $telen1*9 . "<h1>";
++$telen1; 
}*/




$test=1;
do{
    echo "<h5> HET IS GELUKT <h5>";
    ++$test;
}while($test<=3);
?>
