<?php
    #Arreglos asociativos
    /*Contiene pares de elementos conocidos como llava -> valor*/
    /*llave es el nombre de la persona y el telefono es el valor*/
    $directorio = array("Omar" => "1-23-02-90", "Carlos" => "2-33-42-34", "Pepe" => "3-45-45-67");
    //var_dump($directorio);
    #Los arreglos asociativos se indexan por medio de la clave

    /*de otra manare*/

    foreach($directorio as $llave => $valor)
    {
        echo $llave . " = " . $valor . "<br>";
    }

    /*Con esto se actualiza*/
    /*$directorio["Pepe"] = "9-09-09-09";
    echo $directorio["Omar"].'<br>';
    echo $directorio["Carlos"].'<br>';
    echo $directorio["Pepe"].'<br>';
    echo $directorio["Laura"].'<br>';Esta llave no existe*/



?>