<?php
    /*El protocolo http utiliza arreglos asociativos para transferir informacion DESDE el cliente HACIA el servidor.*/
    /*El arreglo asociativo $_GET contiene los datos que envia el cliente hacia el servidor desde la URL.*/
    /*param1=valor1&param2=valor2*/
    //var_dump($_GET);

    /*Sumar dos numeros y regresar el resultado de la suma*/
    if($_GET){#verifica si existe algun valor
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $suma = $num1 + $num2;
        echo '<h1> La suma es: '.$suma.'</h1>';
    }  
?>


<form>
    Escribe el numero 1
    <input  type = "text" name = "num1">
    <br>
    Escribe el numero 2
    <input  type = "text" name = "num2">
    <br>
    <input  type = "submit" value = "enviar">
</form>