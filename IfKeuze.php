<?php

 $naam = readline("Geef jouw naam : ");
 $leeftijd = readline("Geef jouw leeftijd : ");
$mijnleeftijd=21;
 echo "Hallo $naam \n";
 if ( $leeftijd < $mijnleeftijd) {
 echo "Jij bent jonger dan 21 jaar.\n";
}
if ( $leeftijd > $mijnleeftijd) {

echo "Jij bent ouder dan 21 jaar.\n";
 }
 if ( $leeftijd == $mijnleeftijd ) {
 echo "Jij bent precies 21 jaar.\n";
 }
 ?>