<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Estructuras de control</title>
</head>
<h1>Estructuras de control</h1>
<body>
<h2>Instrucciones condicionales</h2>
<?php
    $color = "Rojo";
    if ($color == "Rojo")
    {
        print ("Efectivamente, el color es Rojo!");

    }
   ?>

<h2>Instrucciones repetitivas</h2>
<h3>while</h3>
<?php
    $x = 10;
    while ($x>0)
    
    {
        echo "<big>";
        print("Número: ". $x);
        echo "<br>";
        echo "<hr>";
        $x--;

    }

    ?>    

<h3>for</h3>
<?php
    for($x=5; $x<=10; $x. "<br>");
    {
        echo "Numero: ". $x. "br";
    }
?>
</body>
</html>