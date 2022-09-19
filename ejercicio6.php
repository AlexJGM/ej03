lineas ajustada a la izquierda, formada por letras “o”. El valor de numero de lineas se enviará al servidor mediante GET.

<?php
$get = $_GET ['Param1'];

for ($i=1;$i<=$get;$i++){
    for ($j=1;$j<=$i;$j++){
        echo " o";
    }
    echo "<br>\n ";
}

?> 


