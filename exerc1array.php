<!--Crie um script em PHP crie dois array de 10 posições preenchidos com valores aleatórios e 
faça a soma dos elementos de mesmo índice, colocando o resultado em um terceiro array. 
Imprime os três array, um após o outro. Obs.: Utilize um for
--> 
<h3>Somando os elementos dos arrays</h3>
<?php
$array1 = [];
for($i=1;$i<=10;$i++){
    $numero1 = rand(1,10);
    //echo $numero1.'<br/>';
    array_push($array1, $numero1);

}
echo '<br/>';
print_r($array1);
echo '<hr/>';

$array2 = [];
for($count=1;$count<=10;$count++){
    $numero2 = rand(1,10);
    //echo $numero2.'<br/>';
    array_push($array2, $numero2);

}
echo '<br/>';
print_r($array2);
echo '<hr/>';


/*
$array3;
foreach($array3 as $indice => $valor){// para cada item no array, atribuir um valor
    echo $indice." - ".$valor."<br/>";

}
*/

?>

