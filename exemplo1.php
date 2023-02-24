<?php

$num_1 = $_POST['numero1']; 
$num_2 = $_POST['numero2'];
$funcao = $_POST['Funcao'];


echo "O resultado eh :";
if($funcao == 'Adicao')
    $resultado = $num_1 + $num_2;
if($funcao == 'Subtracao')
    $resultado = $num_1 - $num_2;
if($funcao == 'Multiplicacao')
    $resultado = ($num_1 * $num_2);
if($funcao == 'Divisao')
    $resultado = ($num_1 / $num_2);


echo $resultado;
?>