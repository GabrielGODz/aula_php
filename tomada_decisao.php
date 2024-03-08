<?php

$numero = 0;

// OPÇÃO UTILIZANDO IF E ELSE

if($numero == 1) { echo "Janeiro"; }
if($numero == 2) { echo "Fevereiro"; }
if($numero == 3) { echo "Março"; }
if($numero == 4) { echo "Abril"; }
if($numero == 5) { echo "Maio"; }
if($numero == 6) { echo "Junho"; }
if($numero == 7) { echo "Julho"; }
if($numero == 8) { echo "Agosto"; }
if($numero == 9) { echo "Setembro"; }
if($numero == 10) { echo "Outubro"; }
if($numero == 11) { echo "Novembro"; }
if($numero == 12) { echo "Dezembro"; }


echo "<br><br>";

switch($numero) {
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    case 3:
        echo "Março";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Maio";
        break;
    case 6:
        echo "Junho";
        break;
    case 7:
        echo "Julho";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Setembro";
        break;
    case 10:
        echo "Outubro";
        break;
    case 11:
        echo "Novembro";
        break;
    case 12:
        echo "Dezembro";
        break;
    default:
        echo "Mês não reconhecido";
        break;
}



?>