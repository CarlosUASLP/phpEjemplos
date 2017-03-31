<?php
    /*El protocolo http utiliza arreglos asociativos para transferir informacion DESDE el cliente HACIA el servidor.*/
    /*El arreglo asociativo $_POST contiene los datos que envia el cliente hacia el servidor empaquetados como parte del protocolo.*/
    /*ya No aparece en el URL*/
    /*param1=valor1&param2=valor2*/
    //var_dump($_GET);

    /*Sumar dos numeros y regresar el resultado de la suma*/
    if($_POST){#verifica si existe algun valor
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $suma = $num1 + $num2;
        echo '<h1> La suma es: '.$suma.'</h1>';
    }  
?>


<form method = "POST">
    Escribe el numero 1
    <input  type = "text" name = "num1">
    <br>
    Escribe el numero 2
    <input  type = "text" name = "num2">
    <br>
    <input  type = "submit" value = "enviar">
</form>