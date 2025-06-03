<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones manipulación de cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas en PHP</h1>

    <h2>Función <code>substr()</code></h2>
    <p>Devuelve una parte de una cadena, empezando desde una posición dada.</p>
    <pre><code>
<?php
$texto = "Hola Mundo";
echo substr($texto, 0, 4); // Resultado: Hola
?>
    </code></pre>

    <h2>Función <code>ord()</code></h2>
    <p>Devuelve el valor ASCII del primer carácter de una cadena.</p>
    <pre><code>
<?php
echo ord("A"); // Resultado: 65
?>
    </code></pre>

    <h2>Función <code>printf()</code></h2>
    <p>Imprime una cadena con formato. Se usa para insertar variables dentro de una cadena.</p>
    <pre><code>
<?php
$nombre = "Adriana";
$edad = 16;
printf("Mi nombre es %s y tengo %d años.", $nombre, $edad);
?>
    </code></pre>

    <h2>Función <code>sprintf()</code></h2>
    <p>Devuelve una cadena con formato (a diferencia de <code>printf()</code> que la imprime directamente).</p>
    <pre><code>
<?php
$precio = 99.99;
$cadena = sprintf("El precio del producto es: $%.2f", $precio);
echo $cadena;
?>
    </code></pre>

    <h2>Función <code>strtolower()</code></h2>
    <p>Convierte todos los caracteres de una cadena a minúsculas.</p>
    <pre><code>
<?php
echo strtolower("PHP ES DIVERTIDO"); // Resultado: php es divertido
?>
    </code></pre>

    <h2>Función <code>strtoupper()</code></h2>
    <p>Convierte todos los caracteres de una cadena a mayúsculas.</p>
    <pre><code>
<?php
echo strtoupper("programación web"); // Resultado: PROGRAMACIÓN WEB
?>
    </code></pre>

    <h2>Función <code>ereg()</code> ⚠️</h2>
    <p><strong>Obsoleta desde PHP 5.3.0 y eliminada en PHP 7.0.0.</strong><br>Se usaba para buscar coincidencias con expresiones regulares.</p>
    <pre><code>
<?php
// Este código ya no funciona en PHP moderno
// if (ereg("^H", "Hola")) {
//     echo "Empieza con H";
// }
?>
    </code></pre>
    <p><strong>Alternativa moderna:</strong> <code>preg_match()</code></p>

    <h2>Función <code>eregi()</code> ⚠️</h2>
    <p>Como <code>ereg()</code>, pero sin distinguir entre mayúsculas y minúsculas. También está obsoleta.</p>
    <pre><code>
<?php
// if (eregi("^h", "Hola")) {
//     echo "Empieza con h (ignorando mayúsculas)";
// }
?>
    </code></pre>
    <p><strong>Alternativa moderna:</strong> <code>preg_match('/^h/i', 'Hola')</code></p>

</body>
</html>