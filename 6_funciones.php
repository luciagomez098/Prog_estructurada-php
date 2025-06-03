<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones en php</title>
</head>
<body>
    <h1>funciones</h1>
    <p>una funcion es un bloque de codigo que introducimos en nuestra pagina y  que puede ser utilizado a lo largo de todo nuestro codigo php. la principal ventajade las funciones que nos permiteahorrar codigo</p>
    <p>para definir funciones se emplea la sentencia function. ejemplo: function suma($)</p>
    <p>las funciones puedenrecibir tantos argumetos como sean necesarios ,separados de comas.</p>

    <?php

        function sumar($x,$y)

        {
            $z = $x + $y;
            return $z;
        }
        
        //invoco o llam la funcion sumar
        $resultado = sumar(x: 5,y: 12);
        echo "resultado: ". $resultado;
    ?>
</body>
</html>