<?php
#### ARRAY//´
 $animal0 = '🦄';// 
 $animal01 = '🐶';// 
 $animal02 = '🐹';// 
 $animal03 = '🐨';// 
 $animal04 = '🐓';// 
 $animal05 = '🐱';// 
 $animal06 = '🐸';// 
 $animal07 = '🦉';// 


 $animal = array();// 
 $animal[0] = "🦄";// 
 $animal[1] = "🐶";// 
 $animal[2] = "🐹";// 
 $animal[3] = "🐨";// 
 $animal[4] = "🐓";// 
 $animal[5] = "🐱";// 
 $animal[6] = "🐸";// 
 $animal[7] = "🦉";// 

 $animais = ["🦄", "🐶","🐹","🐨","🐓","🐱","🐸","🦉"];
 $animais[3] = "🐨";array_push($animais, "");

 echo gettype($animais);
 echo count($animais);echo "<h1>animais</h1>";// 
 $qtd = count($animais);// 
 $contador = 0;// 
 while($contador < $qtd){//     // 
    echo "$contador <br>";//     
    echo $animais[$contador];//     
    $contador++;}
?>