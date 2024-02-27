<?php include("includes/footer.php");
if (isset($_POST['registrar'])) {

    $items1 = ($_POST['nombre']);
    $items2 = ($_POST['correo']);
    $items3 = ($_POST['usuario']);
    $items4 = ($_POST['contraseña']);
    while (true) {
        $item1 = current($items1);
        $item2 = current($items2);
        $item3 = current($items3);
        $item4 = current($items4);

        $nombre = (($item1 !== false) ? $item1 : ", &nbsp;");
        $correo = (($item2 !== false) ? $item2 : ", &nbsp;");
        $usuario = (($item3 !== false) ? $item3 : ", &nbsp;");
        $contraseña = (($item4 !== false) ? $item4 : ", &nbsp;");

        //$valores='('.$cantidad.'","'.$producto.'","'.$usuario.'","'.$carga.'","'.$voltaje.'","'.$tipo_tuberia.'","'.$proteccion.'","'.$longitud.'"),';
        $valores = "('$nombre','$correo','$usuario','$contraseña')";

        //$valoresQ= substr($valores,0,-1);

        $sql = ("INSERT INTO usuarios ($valores)");
        $resultset2 = Conexion::ConexionBD()->prepare($sql) or die('Query failed: ' . pg_last_error());
        echo $sql;
        $resultset2->execute();

        if ($resultset2) {
            echo 'Datos insertados correctamente.';
        }

        $item1 = next($items1);
        $item2 = next($items2);
        $item3 = next($items3);
        $item4 = next($items4);


        if ($item1 === false && $item2 === false && $item3 === false && $item4 === false)
            break;

    }
    echo $item1 = $_POST['nombre'];
}
?>