<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP </title>

    <head>

    <body>
        <div class="container">
            <form method="POST" class="formulario">
                <h2 class="titulo">REGISTRAR</h2>
                <?php
                include("database/conexion.php");
                include("controlador_registro_usuario.php");
                ?>
                <div class="padre">
                    <div class="nombre">
                        <input type="text" name="nombre" placeholder="Nombre Completo">
                    </div>
                    <div class="correo">
                        <input type="text" name="correo" placeholder="Correo Electronico">
                    </div>
                    <div class="usuario">
                        <input type="text" name="usuario" placeholder="Usuario">
                    </div>
                    <div>
                        <input type="password" name="contraseña" placeholder="Contraseña">
                    </div>
                    <div>
                        <input class="boton" type="submit" value="Registro" name="registrar">
                    </div>

                </div>
            </form>
        </div>
    </body>