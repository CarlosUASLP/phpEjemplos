    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <!--Esto es un script -->
        <?php
            #variables TODAS las variables se declaran con $
            $num1 = 10;
            $num2 = 20;
            $suma = $num1 + $num2;
            #echo'<h1> Resultado: $suma </h1>';#las comillas simples solo es la cadena
            echo"<h1> Resultado: $suma </h1>";
            #en php se concatena con el .
            echo'Resultado: '.$suma;
            #ciclos, condicionales, swicth, etc son lo mismo que en JS.
        ?>
    </body>
    </html>                 