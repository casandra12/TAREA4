?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido al registro</title>
    <link rel = "shortcut icon" href="formulario.png">
</head>
<body>
    <h1> has sido registrado</h1>
    <h2>datos registrados</h2>

  <?php
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Recibe los datos del formulario
        $user_name = $_POST["user_name"];
        $edad = $_POST["edad"];
        $user_email = $_POST["user_email"];
        $contraseña = $_POST["contraseña"];
        $numcuenta = $_POST["numcuenta"];
        $carrera = $_POST["carrera"];
        $semestre = $_POST["semestre"];

        // Muestra los datos recibidos
        echo "<h3>Nombre: $user_name</h3>";
        echo "<h3>Edad: $edad</h3>";
        echo "<h3>Email: $user_email</h3>";
        echo "<h3>Contraseña: $contraseña</h3>";
        echo "<h3>Número de Cuenta: $numcuenta</h3>";
        echo "<h3>Carrera: $carrera</h3>";
        echo "<h3>Semestre: $semestre</h3>";
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>

<a href="index.php">Link de inicio</a> 
</body>