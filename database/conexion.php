<?php
class Conexion{
    public static function ConexionBD(){
      $host = "localhost";
      $dbname = "Koncet";
      $username = "postgres";
      $password = "newpassword";

       try{
         $conn = new PDO ("pgsql:host=$host; dbname=$dbname",$username,$password);
        }
        catch(PDOException $exp){
         echo ("No se pudo conectar a la base de datos,$exp");
        }
      return $conn;
    }
}

?>