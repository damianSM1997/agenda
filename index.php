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
    <table>

    <thead>
            <tr>
                <td colspan="2"><a href="formulario.php">+nuevo</a></td>
                <td colspan="3">Agenda de contactos</td>
                <td colspan= "3">

                <form action="buscar.php" method="POST">
                    
                    <input required type="text" name="q" placeholder="buscar...">
                    <input type="submit" value="buscar">

                </form> </td>

            </tr>

            <tr>
                <td>Numero</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Telefono</td>
                <td>Edad</td>
                <td>Correo</td>
                
                <td colspan= "2">Operaciones</td>
            
            </tr>
           
        </thead>

        <tbody>

        <?php
            include("procesos/conexion.php");

             $sql = ("SELECT * FROM contactos");
            $respuesta = $conexion->query($sql);
            $fila = 0;

            while($contacto = $respuesta->fetch_assoc()){  
                $fila ++;
               if ($fila%2==0) {?> <tr bgcolor="#d8d8d8">  <?php
                
            }else{
                ?> <tr bgcolor="#d8d8d8"> </tr> <?php
            }?>
                
                    <td><?php echo $contacto['id']; ?></td>
                    <td><?php echo $contacto['nombre']; ?></td>
                    <td><?php echo $contacto['apellido']; ?></td>
                    <td><?php echo $contacto['telefono']; ?></td>
                    <td><?php echo $contacto['edad']; ?></td>
                    <td><?php echo $contacto['correo']; ?></td>
                    
                    <td><a href="formulario2.php?id=<?php echo $contacto['id']; ?>" method="REQUEST">Modificar</a></td>
                    <td><a href="procesos/eliminar.php?id=<?php echo $contacto['id']; ?>" onclick="return Eliminar();" method="REQUEST">Eliminar</a></td>
                </tr>
                
                <?php
                    }
    
                ?>
        </tbody>
    </table>
    </section>
</body>
</html>
