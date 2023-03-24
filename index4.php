/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão mostrar "menor de idade" e a 
quantidade de anos que falta para a pessoa ser maior de idade */
<?php
$idade = 10;if($idade >= 18){
    echo "Pode dirigir";}
    else{
        $diferenca = 18 - $idade;
    echo "Menor de idade, volte em $diferenca anos";}
?>   