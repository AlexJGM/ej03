El servidor recibirá un número. Tenemos que sacar por pantalla todos los números primos que hay desde el 1 hasta ese número.


<?php
$num=$_GET['numero'];
function esPrimo($numeroTotal){
    $cont = 0;
    for ($i=1; $i <= $numeroTotal; $i++) {
        if ($numeroTotal % $i==0){
            $cont = $cont + 1;
        }
    }
    if ($cont==2){
        return $numeroTotal;
    }
}

for ($i = 1; $i <= $num; $i++) {
    echo esPrimo($i)."<br>";
}
?>