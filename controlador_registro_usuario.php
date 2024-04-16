<?php
if (!empty($_POST["registrar"])) {
    if (empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["usuario"]) or empty($_POST["contraseña"])){
        echo 'uno de los campos esta vacio';
    }else{
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];

        $sql = ("insert into usuarios(usuario,correo,contraseña,nombre)values('$usuario','$correo','$contraseña','$nombre')");
        $resultset2 = Conexion::ConexionBD()->prepare($sql);
        $resultset2->execute();
        if($resultset2){
            echo 'usuario registrado correctamente';
        }else{
            echo 'usuario no registrado correctamente';
        }
    }
}

?>