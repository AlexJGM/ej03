Realiza la suma desde un número (primerNum) hasta otro (ultimoum)

<?php
    $primerNum = 3;
    $ultimum = 8;

    for($i = $primerNum; $primerNum<$ultimum; $primerNum++, $i=$i+$primerNum){
    }

    echo "la suma de los numeros es: ".$i;
?>