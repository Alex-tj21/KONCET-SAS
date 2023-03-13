<?php include ("includes/header.php")?>
    <div class="container p-4">
        <div class="row">
      
        
            <div class="col-md-4">

                <div class="card card-body">
                   <form action="">
                       <div class="form-group">
                           <label for="Name">Producto:</label>
                            <select>
                             <option value="opcion1">Toma doble</option>
                             <option value="opcion2">Taco 40A</option>
                             <option value="opcion3">Panel cuadrado</option>
                           </select>
                        </div>
                           <p></p>
                        <div class="form-group">
                          <input type="text" name="title" class="form-control" 
                          placeholder="cantidad de producto" autofocus>
                        </div>
                        <p></p>
                        <div class="form-group">
                          <input type="text" name="title" class="form-control" 
                          placeholder="voltaje" autofocus>
                        </div>
                        <p></p>
                        <div class="form-group">
                          <input type="text" name="title" class="form-control" 
                          placeholder="conduit" autofocus>
                        </div>
                        <p></p>
                        <div class="form-group">
                          <input type="text" name="title" class="form-control" 
                          placeholder="conductor" autofocus>
                        </div>
                        <p></p>
                        <div class="form-group">
                          <input type="text" name="title" class="form-control" 
                          placeholder="proteccion" autofocus>
                        </div>
                        <p></p>
                        <div class="form-group">
                          <input type="text" name="title" class="form-control" 
                          placeholder="usuario" autofocus>
                        </div>
                        <p></p>
                        <input type="submit" class="btn btn-success btn-block" name="guardar_tarea" value="realizar calculo">
                    </form>
                </div>
            </div>
           <div class="col-md-8">
               <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th>id</th>
                        <th>descripcion producto</th>
                        <th>cantidad</th>
                        <th>va</th>
                        <th>potencia</th>
                        <th>voltaje</th>
                        <th>corriente</th>
                        <th>factor-proteccion</th>
                        <th>proteccion</th>
                        <th>breaker</th>
                        <th>fase</th>                       
                    </tr>
                  </thead>
               </table>
           </div>

        </div>
    </div>
<?php include ("includes/footer.php")?>
