<?php
if (!empty($_POST["insertar"])) {
    if (empty($_POST["producto"]) or empty($_POST["tipo_tuberia"]) or empty($_POST["longitud"]) or empty($_POST["cantidad"]) or empty($_POST["id_carga"]) or empty($_POST["conductor"]) or empty($_POST["factor_potencia"])){
        echo 'uno de los campos esta vacio';
    }else{
        $usuario=$_POST["usuario"];
        $producto=$_POST["producto"];
        $tipo_tuberia=$_POST["tipo_tuberia"];
        $longitud=$_POST["longitud"];
        $cantidad=$_POST["cantidad"];
        $id_carga=$_POST["id_carga"];
        $conductor=$_POST["conductor"];
        $factor_potencia=$_POST["factor_potencia"];

        $sql = ("CALL conversiones.calculo_vatios_amperios_v2('$usuario','$producto','$tipo_tuberia','$longitud','$cantidad','$id_carga','$conductor','$factor_potencia')");
        $resultset2 = Conexion::ConexionBD()->prepare($sql);
        $resultset2->execute();
        if($resultset2){
            echo 'registro unitario correctamente';
        }else{
            echo 'usuario no registrado correctamente';
        }
    }
}

?>