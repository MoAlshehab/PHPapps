<?php



function func() {
 echo "+het is mo test\n";
 }

 echo "- Deze code is voor de for-lus uitgevoerd.\n";

 for ($counter=1;$counter<=5;$counter++) {
 echo "= Deze code is in de for-lus\n";
 echo " maar voor func() uitgevoerd.\n";
 func();
 echo "= Deze code is in de for-lus\n";
 echo " maar na func() uitgevoerd.\n";
 }


 echo "- Deze code is na de for-lus uitgevoerd.\n";


/*
function func() {
 echo "+ Deze regel is in func() uitgevoerd.\n";
 }

 echo "-- Deze code is voor func() uitgevoerd.\n";

 func();


 echo "== Deze regel is tussen twee func() uitgevoerd.\n";

 func();

 echo "-- Deze regel is na func() uitgevoerd.\n"; *\
 /*
 function mo(){
     echo "het is een function test";
 }

 mo();
 function soeheil($mo,$soe){
     echo "hoeveel is $mo wie is $soe";
 }
 soeheil(100,"mooi");
 {echo"\n";}
 soeheil(1000,"klein");
 {echo"\n";}
 soeheil("goed",123);*/
?>