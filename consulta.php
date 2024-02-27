<?php
include_once("database/conexion.php");

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-sclae=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> PHP </title>
  <!--BOOTSTRAP4-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  <style type="text/css">
    form#formulario {
      float: left;
    }

    div#menu {
      float: right;
    }

    table#tabla {
      padding: 3px 10px;
      border: PowderBlue 5px solid;
      border-radius: 20px;
    }

    h3#texto4 {
      padding: 3px 10px;
      border: white 5px ridge;
      border-radius: 20px;
    }
  </style>

  <head>

  <body>
    <span>
      <div class="popup-overlay" id="popupConsulta">
        <div class="popup-contentConsulta">
            <h3> Consulta</h3>
            <table class="table table-bordered" id="tabla" name="tabla" width="80" cellspacing="3" cellpadding="3"
              style="font-size: 10pt" style="float:right;">
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
                $resultset = Conexion::ConexionBD()->prepare($sql_query) or die('Query failed: ' . pg_last_error());
                $resultset->execute();
                while ($libro = $resultset->fetch(PDO::FETCH_ASSOC)) {
                  //var_dump($libro);
                  ?>
                  <tr>
                    <td>
                      <?php echo $libro["idconv"]; ?>
                    </td>
                    <td>
                      <?php echo $libro['descripcion']; ?>
                    </td>
                    <td>
                      <?php echo $libro['und']; ?>
                    </td>
                    <td>
                      <?php echo $libro['cantidad']; ?>
                    </td>
                    <td>
                      <?php echo $libro['va']; ?>
                    </td>
                    <td>
                      <?php echo $libro['potencia']; ?>
                    </td>
                    <td>
                      <?php echo $libro['voltaje']; ?>
                    </td>
                    <td>
                      <?php echo $libro['corriente']; ?>
                    </td>
                    <td>
                      <?php echo $libro['factor_proteccion']; ?>
                    </td>
                    <td>
                      <?php echo $libro['proteccion']; ?>
                    </td>
                    <td>
                      <?php echo $libro['breaker']; ?>
                    </td>
                    <td>
                      <?php echo $libro['fase']; ?>
                    </td>
                    <td>
                      <?php echo $libro['neutro']; ?>
                    </td>
                    <td>
                      <?php echo $libro['tierra']; ?>
                    </td>
                    <td>
                      <?php echo $libro['conduit']; ?>
                    </td>
                    <td>
                      <?php echo $libro['conductor']; ?>
                    </td>
                    <td>
                      <?php echo $libro['porcentaje_regula']; ?>
                    </td>
                    <td>
                      <?php echo $libro['longitud']; ?>
                    </td>
                    <td>
                      <?php echo $libro['usuario']; ?>
                    </td>
                    <td>
                      <?php echo $libro['fecha']; ?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <button onclick="ocultarPopup()">Cerrar</button>
        </div>
    </span>
  </body>
  <script>
    function mostrarPopup(event) {
      var popup = document.getElementById("popupConsulta");
      popup.classList.add("show");
      event.preventDefault();
    }

    function ocultarPopup() {
      var cerrarpopup = document.getElementById("popupConsulta");
      cerrarpopup.classList.remove("show");
      
    }
  </script>