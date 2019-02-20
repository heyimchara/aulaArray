<?php

echo 'Exercicio1' . '<br>';

$vetor = array();
 
for ($i=0;$i<=50;$i++){
    $vetor[$i] = 42;
    echo 'Indice: '. $i . ' Valor: ' . $vetor[$i] . '<br>'; 
}

echo '<br>';

echo 'Exercicio2' . '<br>';

$vetor = array();
 
for ($i=0;$i<=50;$i++){
    $vetor[$i] = $i;
    echo 'Indice: '. $i . ' Valor: ' . $vetor[$i] . '<br>'; 
}


echo '<br>';

echo 'Exercicio3' . '<br>';

$vetor = array();
$maior = 0;
$soma = 0;
for ($i=0;$i<=30;$i++){
    $vetor[$i] = $i;
    
    echo 'Indice: '. $i . ' Valor: ' . $vetor[$i] . '<br>'; 
    
    if ($vetor[$i] > $maior){
        
        $maior = $vetor[$i];
        $posicao = $i;
        
    }
    
     $soma = $vetor[$i] + $soma;
     $media = $soma / count($vetor); 

}
        echo '<br>';
    echo "O maior elemento : " . $maior . '<br>';
    echo "Sua posicao : " . $posicao . '<br>';
    echo "A soma :" .$soma . '<br>' ;
    echo "A media :" .$media . '<br>';

echo '<br>';

echo 'Exercicio4' . '<br>';

$vetor = array();
 
for ($i=0;$i<=50;$i++){
    $vetor[$i] = $i;
    
    if($i%2==0){
      echo 'Indice: '. $i . ' Valor: ' . $vetor[$i] . '<br>';   
    }
    
    
}

echo '<br>';

echo 'Exercicio5' . '<br>';

$comida = array();
        
        $comida[0] = 'comida';
        $comida[1] = 'tapioca';
        $comida[2] = 'lanche';
        $comida[3] = 'strogonoff';
        $comida[4] = 'macarrao';
        $comida[5] = 'lasanha';
        $comida[6] = 'bife';
        $comida[7] = 'pastel';
        $comida[8] = 'nhoque';
        $comida[9] = 'churrasco';
        
        echo '<pre>';
        print_r($comida); 
        ?>

        <select>
            <?php for($i=0;$i<10;$i++){?>
            <option><?php echo $comida[$i]; ?></option>
               <?php } ?>
        </select>

?>
