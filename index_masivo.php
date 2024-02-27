<?php  include ("includes/header.php");
       include_once ("database/conexion.php");
       
?>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script> 
 <script>
    $(function(){
        $("#adicional").on('click',function(){
            $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
        });

        $(document).on("click",".eliminar", function(){
            var parent = $(this).parents().get(0);
            $(parent).remove();
        });
    });
 </script>
    <header>
        <button onclick="openDialog()"class="btn btn-warning"> ingresar codigo registro</button>
                             
               <dialog method ="post" id="miPopup">
                  <h1>ID_CARGA</h1>
                  <td><input type="text" id="input1" name="id_carga[]" placeholder="carga" required></td>
                  <button onclick="sobreescribirValor()">Guardar</button>
                  <button onclick="closeDialog()">Cerrar</button>
               </dialog>
    </header> 
    
         
         
    <div > 
    <script>
  
  function openDialog() {
    document.getElementById("miPopup").showModal();
  }
  
  function closeDialog() {
    document.getElementById("miPopup").close();
  }
  </script>
    </div> 
    
<script>
  function sobreescribirValor() {
    const input1 = document.getElementById('input1');
    const input2 = document.getElementById('input2');

    input2.value = input1.value;
  }
</script>
<div style="display: inline-block">                 
  <form method ="post" id="div2">
                         <h3 class="bg-primary text-center pad-basic no-btm"> Agregar</h3>
                        <table class= "table table-dark" id = "tabla"width="600" cellspacing="3" cellpadding="3" style="font-size: 10pt">
                            <tr>
                               <td><input require name ="cantidad[]" placeholder ="cantidad"></td>
                               <td><input require name ="id_producto[]" placeholder ="producto"></td>
                               <td><input require name="v_usuario[]" placeholder="usuario"></td>
                               <td><input type="text" id="input2" name="id_carga[]" required></td>
                               <td><input require name="voltaje[]" placeholder="voltaje" ></td> 
                               <td><input require name="v_tipo_tuberia[]" placeholder="tipo tuberia"></td>
                               <td><input require name="v_conductor[]" placeholder="proteccion"></td>
                               <td><input require name="v_longitud[]" placeholder="longitud"></td>
                               <td class="eliminar"><input type="button" value="menos -"></td>
                            </tr>
                        </table>
                        <div class = "btn-der">
                           <input type="submit" name="insertar" value="insertar_registro" class="btn btn-info">
                           <button id="adicional" name="adicional" type="button" class="btn btn-warning">+ MAS</button>
                           
                           
                        </div>
    </form>
</div>                       
  <div class="col-md-8" id="div3" style="display: inline-block" >
           <h3 class="bg-primary text-center pad-basic no-btm"> Consulta</h3>
               <table class="table table-bordered" id="tabla" name="tabla" width="600" cellspacing="3" cellpadding="3" style="font-size: 10pt" style="float:right;">
                  <thead>
                    <tr>
                        <th>id_historico</th>
                        <th>descripcion producto</th>
                        <th>unidad</th>
                        <th>cantidad</th>
                        <th>va</th>
                        <th>potencia</th>
                        <th>voltaje</th>
                        <th>corriente</th>
                        <th>factor-proteccion</th>
                        <th>proteccion</th>
                        <th>breaker</th>
                        <th>fase</th>
                        <th>neutro</th>
                        <th>tierra</th>
                        <th>conduit</th>
                        <th>conductor</th>
                        <th>porcentaje_regular</th>
                        <th>longitud</th>
                        <th>usuario</th>
                        <th>fecha</th>                      
                    </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $sql_query = "SELECT * FROM conversiones.tabla1";
                     $resultset = Conexion::ConexionBD()->prepare( $sql_query) or die('Query failed: ' . pg_last_error());
                     $resultset->execute();
                     while( $libro = $resultset->fetch(PDO::FETCH_ASSOC)) {
                      //var_dump($libro);
                     ?>
                       <tr>
                       <td><?php echo $libro ["idconv"]; ?></td>
                       <td><?php echo $libro ['descripcion']; ?></td>
                       <td><?php echo $libro ['und']; ?></td>
                       <td><?php echo $libro ['cantidad']; ?></td>   
                       <td><?php echo $libro ['va']; ?></td>  
                       <td><?php echo $libro ['potencia']; ?></td> 
                       <td><?php echo $libro ['voltaje']; ?></td> 
                       <td><?php echo $libro ['corriente']; ?></td>
                       <td><?php echo $libro ['factor_proteccion']; ?></td>  
                       <td><?php echo $libro ['proteccion']; ?></td> 
                       <td><?php echo $libro ['breaker']; ?></td> 
                       <td><?php echo $libro ['fase']; ?></td> 
                       <td><?php echo $libro ['neutro']; ?></td> 
                       <td><?php echo $libro ['tierra']; ?></td> 
                       <td><?php echo $libro ['conduit']; ?></td> 
                       <td><?php echo $libro ['conductor']; ?></td>
                       <td><?php echo $libro ['porcentaje_regula']; ?></td> 
                       <td><?php echo $libro ['longitud']; ?></td>  
                       <td><?php echo $libro ['usuario']; ?></td>  
                       <td><?php echo $libro ['fecha']; ?></td> 
                       </tr>
                     <?php } ?>
                     </tbody>
               </table>
  </div>
      
       
<?php include ("includes/footer.php");
  if(isset($_POST['insertar'])){

    $items1 = ($_POST['cantidad']);
    $items2 = ($_POST['id_producto']);
    $items3 = ($_POST['v_usuario']);
    $items4 = ($_POST['input2']);
    $items5 = ($_POST['voltaje']);
    $items6 = ($_POST['v_tipo_tuberia']);
    $items7 = ($_POST['v_conductor']);
    $items8 = ($_POST['v_longitud']);
    
   // echo'<pre>';print_r($_POST);echo'</pre>';
   
        $item1 = is_array($items1) ? $items1 : explode(",", $items1) ;
        $item2 = is_array($items2) ? $items2 : explode(",", $items2) ;
        $item3 = is_array($items3) ? $items3 : explode(",", $items3) ;
        $item4 = is_array($items4) ? $items4 : explode(",", $items4) ;
        $item5 = is_array($items5) ? $items5 : explode(",", $items5) ;
        $item6 = is_array($items6) ? $items6 : explode(",", $items6) ;
        $item7 = is_array($items7) ? $items7 : explode(",", $items7) ;
        $item8 = is_array($items8) ? $items8 : explode(",", $items8) ;

        $cantidad = implode(",",$item1);
        $producto = implode(",",$item2);
        $usuario = implode(",",$item3);
        $carga = implode(",",$item4);
        $voltaje = implode(",",$item5);
        $tipo_tuberia = implode(",",$item6);
        $proteccion = implode(",",$item7);
        $longitud = implode(",",$item8);


//$valores='('.$cantidad.'","'.$producto.'","'.$usuario.'","'.$carga.'","'.$voltaje.'","'.$tipo_tuberia.'","'.$proteccion.'","'.$longitud.'"),';
        $valores="('$cantidad','$producto','$usuario',$carga,'$voltaje','$tipo_tuberia','$proteccion','$longitud')";
       // echo $valores;
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
      }   
        
?>


