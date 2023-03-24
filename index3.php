<?php
/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão verificar se a 
dade é maior ou igual à 90 anos, se for, mostrar a mensagem "já passou do tempo, não pode mais dirigir", senão mostrar "menor de idade"  */
    $idade = 15;if($idade >= 90){
    echo "Já passou do tempo, não pode mais dirigir";}else if($idade >= 18){
    echo "Pode dirigir";}else{
    echo "Menor de idade";}
?>