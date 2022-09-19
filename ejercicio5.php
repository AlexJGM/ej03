Elabore un programa que imprima la figura de un triángulo rectángulo de 10 lineas ajustada a la izquierda, formada por letras “o”. 

<?php

$n = 10;

for ($i=1;$i<=$n;$i++){
    for ($j=1;$j<=$i;$j++){
        echo "o";
    }
    echo "<br>\n ";
}
?> 