<?php

echo 'Exercicio1' . '<br>';



$num = 17;



function primo($num){
   
    $cont = 0;
    
    for($i = 1; $i <= $num; $i++){
     
        if($num % $i == 0){
          $cont = $cont + 1; 
        }
    }
    
     if($cont == 2){
            echo "É primo";
        }
        else{
            echo "É composto";
        }
    
}

primo($num);

echo '<br>';
echo '<br>';

echo 'Exercicio2' . '<br>';



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

echo '<br>';

echo 'Exercicio3' . '<br>';


function cores_lista($cor){
?>

<?php

 for($i = 0; $i < count($cor);  $i++){
?>

<ul>
 <li><?php echo $cor[$i] ?></li>
</ul>

<?php } ?>  

<?php }


$cor = array('Branco', 'Verde', 'Vermelho', 'azul');
cores_lista($cor);

?>


