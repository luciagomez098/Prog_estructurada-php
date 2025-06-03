<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>

    <h2>Aritmeticos</h2>

    <?php
        $x = 9;
        $y = 3;
        $z = 5;

        $suma = $x + $y;
        $resta = $x - $z;

        echo "La suma es:", $Suma;
    ?>

    <h2>De comparacion</h2>

    <?php
        $x = 9;
        $y = 3;

        echo ($x == $y);
    
    ?>

    <h2>Logicos</h2>

    <?php
        $x = 9;
        $y = 3;

        if( $x == 9 && $y == 3)
        {
            echo "Estas en lo correcto";
        }

    ?>

    <h2>De union de cadenas</h2>

    <?php
        $nombre = 'Nestor';
        $apellido = 'Paez';

        $nombre_completo = $nombre." ".$apellido;

        echo $nombre_completo;

    ?>

</body>
</html>