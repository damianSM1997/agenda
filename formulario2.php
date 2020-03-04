<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Agenda de contactos</title>
    <link href="https://fonts.googleapis.com/css?family=Anton|Squada+One&display=swap" rel="stylesheet">
    <script src="js/validaciones.js"></script>
</head>
<body>
    <section id="inicio">
    <h1>Agenda de contactos</h1>
    <form id="form" action="procesos/modificar.php" method="POST">
    <h2>Modificar contacto</h2>

    <!Parte php__>
    
    <?php

        include("procesos/conexion.php");
        $id = $_REQUEST ['id'];
        $sql = "SELECT * FROM contactos WHERE id = '$id'";
        $respuesta = $conexion->query($sql);
        $contacto = $respuesta->fetch_assoc();
    ?>


    <!parte de los contactos a modificar__>
    <input type="hidden" name="id" value="<?php echo $contacto['id']; ?>">
    <input type="text" value="<?php echo $contacto['nombre']; ?>" name ="nombre" placeholder= "Nombre....">
    <input type="text" value="<?php echo $contacto['apellido']; ?>" name ="apellido" placeholder= "Apellido....">
    <input type="text" value="<?php echo $contacto['telefono']; ?>" name ="telefono" placeholder= "Telefono....">
    <input type="email" value="<?php echo $contacto['correo']; ?>" name ="correo" placeholder= "Correo....">
    <input type="text" value="<?php echo $contacto['edad']; ?>" name ="edad" placeholder= "Edad....">
    <input type="submit" value= "Actualizar">

    <a href="index.php">Cancelar</a>
    </form>
    </section>
</body>
</html>