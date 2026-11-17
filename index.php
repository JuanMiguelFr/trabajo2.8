<?php
include 'cadenas.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tarea 2.8</title>
</head>
<body>

    <h2>Funciones con cadenas de texto</h2>

    <form method="POST">
        Escribe una palabra o frase: <br>
        <input type="text" name="texto" required>
        <input type="submit" value="Aceptar">
    </form>

    <br>

    <?php
    if (isset($_POST['texto'])) {
        $palabra = $_POST['texto'];

        echo "Texto ingresado: " . $palabra . "<br><br>";
        echo "Cantidad de caracteres: " . contarCaracteres($palabra) . "<br>";
        echo "Mayusculas: " . convertirMayusculas($palabra) . "<br>";
        echo "Minusculas: " . convertirMinusculas($palabra) . "<br>";
        echo "Invertida: " . invertirCadena($palabra) . "<br>";
        echo "Palindromo: " . esPalindromo($palabra) . "<br>";
        echo "Numero de vocales: " . contarVocales($palabra) . "<br>";
    }
    ?>

</body>
</html>