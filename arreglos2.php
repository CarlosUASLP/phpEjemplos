<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            $arreglo = array(
                array('cadena',1234),
                array(3.1416,true,false),
                array("otro")
            );
            for($i=0; $i < count($arreglo); $i++)
            {
                for($j=0; $j < count($arreglo[$i]); $j++)
                {
                    echo $arreglo[$i]{$j}.", ";
                }
                echo '<br>';
            }

            echo "<h1> foreach </h1>";

            echo "<table>";
            echo "<tbody>";
            foreach($arreglo as $ren)
            {   echo "<tr>";
                foreach($ren as $elem)
                {
                    echo "<td>".$elem.", "."<td>";
                }
                echo "<br>";
                echo"</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        ?>
    </ul>
        <?php
            echo "<table>";
            echo "<tbody>";
            foreach($arreglo as $ren)
            {   echo "<tr>";
                foreach($ren as $elem)
                {
                    echo "<td>".$elem.", "."<td>";
                }
                echo "<br>";
                echo"</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            ?>
</body>
</html>