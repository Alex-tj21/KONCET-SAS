<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sclae=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> PHP </title>
        <!--BOOTSTRAP4-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="index.css" />
        <style type="text/css">
           form#formulario{
              float:left;
            }
            div#menu{
  		      float:right;
  	        }
        </style>
    <head>     
<span>
   <div class="col-md-4" id ="div5">
                <div class="card card-body">
                   <form  method="post">
                        <div class="form-group">
                          <input type="text" require name ="cantidad[]" class="form-control" 
                          placeholder="cantidad" autofocus>
                        </div>
                        <p></p>
                       <div class="form-group">
                            <select class="form-control" require name ="id_producto[]" autofocus>
                             <option value=""default selected>Seleccionar producto</option> 
                             <option value="1">Toma doble</option>
                             <option value="2">Toma corriente</option>
                             <option value="3">Panel cuadrado</option>
                           </select>
                        </div>
                           <p></p>
                        <div class="form-group">
                          <input type="text" require name="v_usuario[]" class="form-control" 
                          placeholder="usuario" autofocus>
                        </div>
                        <p></p>                        
                        <div class="form-group">
                          <input type="text" require name="id_carga[]" class="form-control" 
                          placeholder="carga" autofocus>
                        </div>
                        <p></p>
                        <div class="form-group">
                          <input type="text" require name="voltaje[]" class="form-control" 
                          placeholder="voltaje" autofocus>
                        </div>
                        <p></p>
                        <div class="form-group">
                          <input type="text" require name="v_tipo_tuberia[]" class="form-control" 
                          placeholder="tipo tuberia" autofocus>
                        </div>
                        <p></p>
                        <div class="form-group">
                          <input type="text" require name="v_conductor[]" class="form-control" 
                          placeholder="proteccion" autofocus>
                        </div>
                        <p></p>
                        <div class="form-group">
                          <input type="text" require name="v_longitud[]" class="form-control" 
                          placeholder="longitud" autofocus>
                        </div>
                        <p></p>
                        <input type="submit" name="insertar" value="insertar_registro" class="btn btn-info">
                    </form>
                </div>
   </div>
</span>
<?php include ("includes/footer.php");
  if(isset($_POST['insertar'])){

    $items1 = ($_POST['cantidad']);
    $items2 = ($_POST['id_producto']);
    $items3 = ($_POST['v_usuario']);
    $items4 = ($_POST['id_carga']);
    $items5 = ($_POST['voltaje']);
    $items6 = ($_POST['v_tipo_tuberia']);
    $items7 = ($_POST['v_conductor']);
    $items8 = ($_POST['v_longitud']);
    while(true){
        $item1 = current($items1);
        $item2 = current($items2);
        $item3 = current($items3);
        $item4 = current($items4);
        $item5 = current($items5);
        $item6 = current($items6);
        $item7 = current($items7);
        $item8 = current($items8);

        $cantidad = (($item1 !== false) ? $item1 : ", &nbsp;");
        $producto = (($item2 !== false) ? $item2 : ", &nbsp;");
        $usuario = (($item3 !== false) ? $item3 : ", &nbsp;");
        $carga = (($item4 !== false) ? $item4 : ", &nbsp;");
        $voltaje = (($item5 !== false) ? $item5 : ", &nbsp;");
        $tipo_tuberia = (($item6 !== false) ? $item6 : ", &nbsp;");
        $proteccion = (($item7 !== false) ? $item7 : ", &nbsp;");
        $longitud = (($item8 !== false) ? $item8 : ", &nbsp;");


//$valores='('.$cantidad.'","'.$producto.'","'.$usuario.'","'.$carga.'","'.$voltaje.'","'.$tipo_tuberia.'","'.$proteccion.'","'.$longitud.'"),';
        $valores="('$cantidad','$producto','$usuario',$carga,'$voltaje','$tipo_tuberia','$proteccion','$longitud')";
       
        //$valoresQ= substr($valores,0,-1);

        $sql = ("CALL conversiones.calculo_vatios_amperios_v2  $valores");
        $resultset2 = Conexion::ConexionBD()->prepare($sql) or die('Query failed: ' . pg_last_error());
        echo $sql;
        $resultset2->execute();
    
        if($resultset2){
           echo 'Datos insertados correctamente.';
        }
 
        $item1 = next($items1);
        $item2 = next($items2);
        $item3 = next($items3);
        $item4 = next($items4);
        $item5 = next($items5);
        $item6 = next($items6);
        $item7 = next($items7);
        $item8 = next($items8);
        
       
        if ($item1 === false && $item2 === false && $item3 === false &&$item4 === false &&$item5 === false &&$item6 === false &&$item7 === false &&$item8 === false ) break;
        
        }
        }
?>