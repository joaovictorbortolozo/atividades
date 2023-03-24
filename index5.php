<?php
/*PROBLEMA: crie um código que verifique a cor informada pelo usuário e gere um código hexadecimal para formatar a cor do texto. As cores permitidas são: azul, 
vermelho e verde. Caso seja diferente, deixar a letra preta;*/
$corEscolhida = "verde";$corHexa = "";switch($corEscolhida){
    case "vermelho":
        $corHexa = "#ff0000";
        break;
        case "azul":
             $corHexa = "#0000ff";
             break; 
             case "verde": 
                $corHexa = "#00ff00";
                 break; default:
                 $corHexa = "#000000";
                 break;
                }echo "<h1 style='color:$corHexa'>Olá</h1>";

// if($corEscolhida == "vermelho"){//     $corHexa = "#ff0000";// }elseif($corEscolhida == "azul"){//     $corHexa = "#0000ff";// }elseif($corEscolhida == "verde"){//     $corHexa = "#00ff00";// }else{//     $corHexa = "#000000";// }
?>