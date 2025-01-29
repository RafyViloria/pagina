<?php
// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos el nombre del usuario desde el formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $mensaje = "¡Hola, " . $nombre . "! Bienvenido a nuestra página.";
} else {
    $mensaje = "Por favor, ingresa tu nombre en el formulario.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #007bff;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            margin-right: 10px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Bienvenido a mi página web en PHP</h1>
    <p><?php echo $mensaje; ?></p>

    <!-- Formulario para ingresar nombre -->
    <form method="POST">
        <input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>