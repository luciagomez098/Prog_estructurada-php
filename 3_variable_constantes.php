<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes en PHP</title>
</head>
<body>
   <h1>Variables y Constantes en PHP</h1> 
   <?php
        // Las variables se representan ante poniendo el simbolo $ a la palabra que se use como varible.
        // PHP es sensitive case
        // Las variables no pueden empezar con un numero
        /* En php no es necesario especificar el tipo de variable, pero si se sebe saber cuando utilizar las comillas para
        el caso de varibles de tipo cadena o sting*/

        // Asignamos a la varible a el valor 5
        $a = 5;

        // Asignamos a la varible b el valor 7 como cadena
        $b = "7";

        echo"<h2> Variables <h2>";
        //mostrar el valor de la variable a
        echo($a);

        echo"<br>";
         
        //mostrar el valor de la variable b
        echo($b);

        echo "<br>";

        echo"<h2> Constantes <h2>";

        /* El valor de una constante no cambia o se mantiene fijo durante la ejecucion de una pagina  */

        /* La forma de definir las constantes en php, es mediante el uso de la instruccion define */

        // Creamos una constante llamada capital_colombia cuyo valor es Bogota
        define('capital_colombia','Bogota');


   ?>

</body>
</html>