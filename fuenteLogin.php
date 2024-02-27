<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP </title>

    <link rel="stylesheet" href="style/login.css">

    <head>

    <body background="fondo1.jpg">
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para ingresar a la pagina</p>
                        <button id="btn-iniciar-sesion">Iniciar Sesion</button>
                    </div>
                    <div class="caja__trasera-Registro">
                        <h3>¿Aun no tienes una cuenta?</h3>
                        <p>Registrate para Inicia sesión</p>
                        <button id="btn-registrarse">Registrarse</button>
                    </div>
                </div>
                <div class="contenedor__login-registro">
                    <form action="" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" name="usuario" placeholder="Usuario">
                        <input type="password" name="contraseña" placeholder="Contraseña">
                        <br><br />
                        <a href="modulo_presentacion.php" class="boton_login">Ingresar</a>

                    </form>
                    <form action="store.php" method="POST" class="formulario__registro" autocomplete="off">
                        <h2>Registrarse</h2>
                        <input type="text" require name="nombre[]" placeholder="Nombre Completo">
                        <input type="text" require name="correo[]" placeholder="Correo Electronico">
                        <input type="text" require name="usuario[]" placeholder="Usuario">
                        <input type="password" require name="contraseña[]" placeholder="Contraseña">
                        <button type="submit" name="registrar">Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
        <script src='assets/scripts.js'></script>
    </body>

</html>