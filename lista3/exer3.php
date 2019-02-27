
<?php
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