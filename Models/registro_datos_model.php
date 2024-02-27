<?php
  include_once ("database/conexion.php")
 /* Class Registro extends conexion{
  public static function registrarDatos ($datos){
      try{
        $sql = "CALL conversiones.calculo_vatios_amperios_v2 (:cantidad,:id_producto,:v_usuario,:id_carga,:voltaje,:v_tipo_tuberia,:v_conductor,:v_longitud) ";
        $resultset = Conexion::ConexionBD()->prepare( $sql) or die('Query failed: ' . pg_last_error());       
        $resultset->bindParam(":cantidad", $datos['cantidad']);
        $resultset->bindParam(":id_producto", $datos['id_producto']);
        $resultset->bindParam(":v_usuario", $datos['v_usuario']);
        $resultset->bindParam(":id_carga", $datos['id_carga']);
        $resultset->bindParam(":voltaje", $datos['voltaje']);
        $resultset->bindParam(":v_tipo_tuberia", $datos['v_tipo_tuberia']);
        $resultset->bindParam(":v_conductor", $datos['v_conductor']);
        $resultset->bindParam(":v_longitud", $datos['v_longitud']);
        $resultset->execute();

        if($resultset){
            echo 'Datos insertados correctamente.';
        }
        return true;
      }
      catch (PDOException $th){
         echo $th->getMessage();
      }
   }
 }*/
?>