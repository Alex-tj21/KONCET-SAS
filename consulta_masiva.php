
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