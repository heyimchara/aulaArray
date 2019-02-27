<?php

function primo_menor100() {
    
    for($j = 2; $j <= 100; $j++){
$num = $j;

  $cont = 0;  
    
    for($i = 1; $i <= $num; $i++){
     
        if($num % $i == 0){
          $cont = $cont+1; 
        }
    }
    
     if($cont == 2){
            echo $num . " é primo<br>";
        }
        else{
            echo $num . " é composto<br>";
        }
    
}
    
}



primo_menor100();

