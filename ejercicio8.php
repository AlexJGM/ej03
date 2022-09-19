Se recibirá un dato llamado pares por GET que contendrá TRUE o FALSE.
Si es TRUE, mostrar en pantalla números pares del 1 al número aleatorio menor que 99 si se le ha recibido  el valor FALSE en la pantalla tienen que aparecer los valores impares.


<?php

$pares = $_GET['Param1'];

if($pares==true){
    for ($i = 1; $i < (rand(5,99)); $i++){
        if ($i%2==0) {
            echo $i."  ";
        }
    }
}else if($pares==false){
    for ($i = 1; $i < (rand(5,99)); $i++){
        if ($i%2!=0) {
            echo $i."  ";
        }
    }
}
?>