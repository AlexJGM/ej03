Realiza la suma desde un número (primerNum) hasta otro (ultimoum). Los valores de los dos parámetros se enviarán por GET.

<?php
    
$primerNum = $_GET ['Param1'];
$ultimum = $_GET ['Param2'];

for($i = $primerNum; $primerNum<$ultimum; $primerNum++, $i=$i+$primerNum){
}

echo "la suma de los numeros es: ".$i;
?>
   
   


