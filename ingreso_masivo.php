<div style="display: inline-block">                 
  <form method ="post" id="div2">
                         <h3 class="bg-primary text-center pad-basic no-btm"> Agregar</h3>
                        <table class= "table table-dark" id = "tabla"width="600" cellspacing="3" cellpadding="3" style="font-size: 10pt">
                            <tr>
                               <td><input require name ="cantidad[]" placeholder ="cantidad"></td>
                               <td><input require name ="id_producto[]" placeholder ="producto"></td>
                               <td><input require name="v_usuario[]" placeholder="usuario"></td>
                               <td><input type="text" id="input2" name="id_carga[]"></td>
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