<?php

/*
if
switch
operador ternário ?:
*/

$nota = 7.5;
$freq = 75;
$recuperacao = 80;

/*
if( ($nota >= 7) && ($freq >= 70)  ){
    echo "Aprovado";
} else if($recuperacao > 7.5 )  {
    echo "Aprovado por recuperação";
} else {
    echo "Reprovado";
}
*/

/*
$letra = '1'; // === == 

switch ($letra) {
    case 1:
        echo "Sala 50";
        break;
    case 2:
        echo "Sala 51";
        break;
    default:
        echo "Palestra no auditório";
        break;
}

*/


$resultado = ($nota >= 7) && ($freq >= 70) ? "Aprovado" : "Reprovado";

echo $resultado;

?>