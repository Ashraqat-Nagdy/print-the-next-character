
<?php


 function printChar($fchar){

    $nextChar = ++$fchar ;  
    if (strlen($nextChar) > 1){
        $nextChar = $nextChar[0];
    }
   echo $nextChar;
 }
   
 echo printChar('m');
?>
