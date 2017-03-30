<?php
    #Los arreglos se crean utilizando el operador array()
    #Pueden contener cualquier tipo de dato
    $arreglo = array('cadena',1234,3.1416,true,false,"otro");
    #rsort y sort
    sort($arreglo);

    for($i=0; $i < sizeof($arreglo); $i++)
    {
        echo $arreglo[$i]."<br>";
    }

    rsort($arreglo);
    echo "foreach <br>";

    echo '<ul>';
    foreach($arreglo as $elemento)
    {
        echo '<li>'.$elemento.'</li>';
    }
    echo '</ul>'
?>