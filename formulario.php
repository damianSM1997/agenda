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
    <form id="form" action="procesos/insertar.php" method="POST">
    <h2>Nuevo contacto</h2>
    <input type="text" name ="nombre" placeholder= "Nombre....">
    <input type="text" name ="apellido" placeholder= "Apellido....">
    <input type="text" name ="telefono" placeholder= "Telefono....">
    <input type="email" name ="correo" placeholder= "Correo....">
    <input type="text" name ="edad" placeholder= "Edad....">
    <input type="submit" value= "Aceptar">
    </form>
    </section>
</body>
</html>