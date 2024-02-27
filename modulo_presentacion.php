<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Menu </title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <script src="menu.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Source Sans 3', sans-serif;
            text-decoration: none;
        }

        header {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: #fff;
        }

        .buscador {
            width: 300px;
            padding: 10px;
        }

        .container__menu {
            width: 100%;
            height: 60px;
            background: #023877;
            padding: 0px 20px;
        }

        nav {
            height: 100%;
        }

        nav>ul {
            height: 100%;
            display: flex;
        }

        nav ul li {
            height: 100%;
            list-style: none;
            position: relative;
        }

        nav>ul>li>a {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            padding: 35px;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
            transition: all 300ms ease;
        }

        nav>ul>li>a:hover {
            transform: scale(1.1);
            background: #0074C7;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        nav ul li ul {
            width: 200px;
            display: flex;
            flex-direction: column;
            background: #fff;
            position: absolute;
            top: 90px;
            left: -5px;
            padding: 14px 0px;
            visibility: hidden;
            opacity: 0;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            z-index: 10;
            transition: all 300ms ease;
        }

        nav ul li:hover ul {
            visibility: visible;
            opacity: 1;
            top: 70px;
        }

        nav ul li ul:before {
            content: '';
            width: 0;
            height: 0;
            border-left: 12px solid transparent;
            border-right: 12px solid transparent;
            border-bottom: 12px solid white;
            position: absolute;
            top: 12px;
            left: 20px;

        }

        nav ul li ul li a {
            display: block;
            color: #0099E9;
            padding: 6px;
            padding-left: 14px;
            margin-top: 10px;
            font-size: 14px;
            text-transform: uppercase;
            transition: all 300ms ease;
        }

        nav ul li ul li a:hover {
            background: #0074C7;
            color: #fff;
            transform: scale(1.1);
            padding-left: 30px;
            font-size: 14px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        main {
            background: #f0f0f0;
            padding: 40px 20px;
            marging-top: 194px;
        }

        article {
            max-width: 1200px;
            margin: 20px auto;
            padding: 40px;
            background: #fff;
        }

        article p {
            margin-top: 20px;
            font-size: 18px;
            font-weight: 300;
        }

        //elementos responsive
        .icon__menu {
            font-size: 26px;
            color: white;
            cursor: pointer;
            width: 26px;
            height: 100%;
            display: none;
            align-items: center;
        }

        #label__check {
            width: 26px;
            height: 100%;
            display: none;
        }

        #check__menu {
            display: none;
        }

        .content {
            width: 100%;
            max-width: 700px;
            margin: auto;
            margin-top: 100px;
            position: relative;
        }

        .tab-content {
            display: none;
        }

        .tab:target .tab-content,
        .tab:last-of-type .tab-content {
            display: block;
        }

        .tab:target~.tab:last-of-type .tab-content {
            display: none;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            text-align: center;
        }

        .popup-overlay.show {
            display: flex;
        }

        @media screen and (max-width: 720px) {
            .buscador input {
                display: none;
            }

            nav>ul {
                flex-direction: column;
                background-color: #023877;
                position: fixed;
                left: 0;
                top: 158px;
                width: 100%;
                height: 0px;
                transition: all 300ms ease;
                z-index: 100;
                opacity: 0;
                visibility: hidden;
            }

            nav>ul>li>a:hover {
                transform: scale(1);
            }

            nav ul li ul {
                left: 90px;
            }

            nav>ul>li:hover ul {
                top: 50px;
            }

            nav>ul>li:first-child a {
                background-position: 20px;
            }

            #selected {
                transform: scale(1);
            }

            #label__check {
                display: block;
            }

            .icon__menu {
                display: flex;
            }

            #check__menu:checked~nav>ul {
                height: 300px;
                visibility: visible;
                opacity: 1;
            }

        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: cursive;
        }

        input,
        textarea {
            width: 30%;
            padding: 5px;
            outline: none;
        }

        label {
            line-height: 1.9rem;
        }

        input[type="submit"] {
            transform: translate(2.2%);
            padding: 3px;
            margin-top: 0.6rem;
            font-family: cursive;
            font-weight: bold;
        }

        .form-control-lista {
            transform: translate(2.2%);
            padding: 3px;
            margin-top: 0.6rem;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        .form-control {
            display: flex;

        }

        .datos {
            width: 500px;
            padding: 35px;
            margin-left: 15px display: block;
        }

        fieldset {
            padding: 20px 40px;
        }
    </style>
</head>
<?php
// define variables and set to empty values
$cantidadErr = $cargaErr = $conductorErr = $longitudErr = $potenciaErr  = $productoErr = $tuberiaErr = "";
$cantidad = $carga = $conductor = $longitud = $potencia = $producto =$tuberia = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["id_producto"])) {
    $productoErr = "Campo requerido";
  } else {
    $producto = test_input($_POST["id_producto"]);
  }

  if (empty($_POST["v_tipo_tuberia[]"])) {
    $tuberiaErr = "Campo requerido";
  } else {
    $tuberia = test_input($_POST["v_tipo_tuberia[]"]);
  }

  if (empty($_POST["cantidad"])) {
    $cantidadErr = "Campo requerido";
  } else {
    $cantidad = test_input($_POST["cantidad"]);
  }
  
  if (empty($_POST["id_carga"])) {
    $cargaErr = "Campo requerido";
  } else {
    $carga = test_input($_POST["id_carga"]);
  }
    
  if (empty($_POST["v_conductor"])) {
    $conductorErr = "Campo requerido";
  } else {
    $conductor = test_input($_POST["v_conductor"]);
  }

  if (empty($_POST["v_longitud"])) {
    $longitudErr = "Campo requerido";
  } else {
    $longitud = test_input($_POST["v_longitud"]);
  }

  if (empty($_POST["factor_potencia"])) {
    $potenciaErr = "Campo requerido";
  } else {
    $potencia = test_input($_POST["factor_potencia"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<body>
    <header>
        <div class="container__menu">
            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label id="label__check" for="check__menu">
                    <i class="fas fa-bars icon__menu"></i>
                </label>
                <nav>
                    <ul class="tabs">
                        <li><a href="#" class="pestana-activa" onclick="mostrarContenido(0)">Inicio</a></li>
                        <li><a href="#">Servicios</a>
                            <ul>
                                <li><a href="#" onclick="mostrarContenido(2)">consulta unitario</a></li>
                                <li><a href="perfil">consulta masiva</a></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="mostrarContenido(1)">Nosotros</a></li>
                        <li><a href="#">Contactos</a></li>
                        <li class="buscador">
                            <input type="search" placeholder="buscar">
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="contenido">
            <div class="contenido-item" style="display: block;">
                <h2>Mision</h2>
                <p> Está enfocada en la prestación de servicios de asesoría, planeación, diseño y construcción de proyectos de ingeniería, buscando la satisfacción de nuestros clientes, mediante la implementación de avances tecnológicos. 
                </p>
                <h2>Vision</h2>
                <p>Ser una empresa líder de ingeniería y arquitectura que ofrezca a sus clientes una constante innovación tecnológica, comprometida con el medio ambiente y su desarrollo sostenible, bajo estándares de calidad internacional al continente americano para el año 2025. 
                   Dentro de los avances establecidos en KONCET S.A.S alineados con las políticas empresariales, a la fecha se han establecido procedimientos y procesos aplicando metodologías como Scrum y Kanban, con asesoría dadas por Entidades cómo el Ministerio de Comercio, Industria y Turismo MINCIT y su programa Colombia Productiva/fábricas de productividad, Secretaria Distrital de Desarrollo Económico de Bogotá y la Cámara de Comercio de Bogotá mediante la iniciativa Clúster Energía Vicepresidencia de Competitividad.  
                </p>
            </div>
            <div class="contenido-item">
                <h2>Quienes somos</h2>
                <p>Somos una empresa Colombiana que desde el año 2014 presta asesorías, diseños, construcciones e interventorías de los sistemas eléctricos y de telecomunicaciones, a nivel nacional. Además, prestamos soluciones técnicas, eficientes y de calidad para satisfacer las necesidades de nuestros clientes, con estándares Nacionales e Internacionales.
                   Implementamos RPA e IA en nuestros procesos, preparándonos para la Internacionalización.
                </p>
            </div>
            <div class="contenido-item" style="overflow-x: hidden; overflow-y: auto; height: 38em; border: 1px solid">
                <div class="card card-body">
                    <form method="post" action="servidor-ejemplo" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <fieldset>
                            <legend>Consulta</legend>
                            <div class="form-control">
                                <div class="datos">
                                    <label for="name">Usuario:</label>
                                    <input type="text" require name="v_usuario[]" class="form-control"
                                        placeholder="usuario" autofocus>
                                    <label for="email">Tipo producto:</label>
                                    <br>
                                    <select class="form-control-lista" require name="id_producto[]" autofocus>
                                        <option value="" default selected>Seleccionar producto</option>
                                        <option value="1">Toma doble</option>
                                        <option value="2">Toma corriente</option>
                                        <option value="3">Panel cuadrado</option>
                                    </select>
                                    <span class="error">* <?php echo $productoErr;?></span>
                                    <br>
                                    <label for="message">Tipo tuberia</label>
                                    <br>
                                    <select class="form-control-lista" require name="v_tipo_tuberia[]" autofocus>
                                        <option value="" default selected>Seleccionar tipo tuberia</option>
                                        <option value="1">PVC</option>
                                        <option value="2">Cobre</option>
                                        <option value="3">Panel cuadrado</option>
                                    </select>
                                    <span class="error">* <?php echo $tuberiaErr;?></span>
                                    <br>
                                    <label for="message">Longitud:</label>
                                    <input type="text" require name="v_longitud[]" class="form-control"
                                        placeholder="longitud" autofocus>
                                    <span class="error">* <?php echo $longitudErr;?></span>
                                        
                                </div>
                                <div class="datos">
                                    <label for="email">Cantidad:</label>
                                    <input type="text" require name="cantidad[]" class="form-control"
                                        placeholder="cantidad" autofocus>
                                    <span class="error">* <?php echo $cantidadErr;?></span>
                                        
                                    <label for="message">Carga:</label>
                                    <input type="text" require name="id_carga[]" class="form-control"
                                        placeholder="carga" autofocus>
                                        <span class="error">* <?php echo $cargaErr;?></span>
                                        
                                    <label for="message">Tipo proteccion:</label>
                                    <input type="text" require name="v_conductor[]" class="form-control"
                                        placeholder="proteccion" autofocus>
                                        <span class="error">* <?php echo $conductorErr;?></span>
                                        
                                    <label for="message">Potencia:</label>
                                    <input type="text" require name="factor_potencia[]" class="form-control"
                                        placeholder="factor potencia rango 0 a 1" autofocus>
                                        <span class="error">* <?php echo $potenciaErr;?></span>
                                  
                                </div>
                            </div>
                            <input type="submit" name="insertar" value="insertar_registro" class="submit-btn"
                            >
                            
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </header>
    <div class="popup-overlay" id="popup">
        <div class="popup-content">
            <h3>Informativo</h3>
            <p>Este es un mensaje de conclusiones.</p>
            <p>Este es un mensaje de conclusiones.</p>
            <p>Este es un mensaje de conclusiones.Este es un mensaje de conclusiones.Este es un mensaje de conclusiones.</p>
            <p>Este es un mensaje de conclusiones.</p>
            <p>Este es un mensaje de conclusiones.</p>
            <p>Este es un mensaje de conclusiones.</p>
            <p>Este es un mensaje de conclusiones.</p>
            <button onclick="ocultarPopup()">Cerrar</button>
        </div>
    </div>
    <script>
        function mostrarPopup(event) {
            var popup = document.getElementById("popup");
            popup.classList.add("show");
            event.preventDefault();
        }

        function ocultarPopup() {
            var cerrarpopup = document.getElementById("popup");
            cerrarpopup.classList.remove("show");
            window.location.href = "consulta.php";
        }
        document.addEventListener("DOMContentLoaded", function () {
            const contenidoItems = document.getElementsByClassName('contenido-item');
            for (let i = 0; i < contenidoItems.length; i++) {
                contenidoItems[i].style.display = 'none';
            }
            contenidoItems[0].style.display = 'block';
        });

        function mostrarContenido(indice) {
            const pestanas = document.getElementsByClassName('pestana-activa');
            for (let i = 0; i < pestanas.length; i++) {
                pestanas[i].classList.remove('pestana-activa');
            }
            event.target.classList.add('pestana-activa');

            const contenidoItems = document.getElementsByClassName('contenido-item');
            for (let i = 0; i < contenidoItems.length; i++) {
                contenidoItems[i].style.display = 'none';
            }
            contenidoItems[indice].style.display = 'block';
        }

    </script>
</body>

<?php include("includes/footer.php");
if (isset($_POST['insertar'])) {

    $items1 = ($_POST['cantidad']);
    $items2 = ($_POST['id_producto']);
    $items3 = ($_POST['v_usuario']);
    $items4 = ($_POST['id_carga']);
    $items5 = ($_POST['v_tipo_tuberia']);
    $items6 = ($_POST['v_conductor']);
    $items7 = ($_POST['v_longitud']);
    $items8 = ($_POST['factor_potencia']);
    while (true) {
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
        $tipo_tuberia = (($item5 !== false) ? $item5 : ", &nbsp;");
        $proteccion = (($item6 !== false) ? $item6 : ", &nbsp;");
        $longitud = (($item7 !== false) ? $item7 : ", &nbsp;");
        $factor_potencia = (($item8 !== false) ? $item8 : ", &nbsp;");


        //$valores='('.$cantidad.'","'.$producto.'","'.$usuario.'","'.$carga.'","'.$voltaje.'","'.$tipo_tuberia.'","'.$proteccion.'","'.$longitud.'"),';
        $valores = "('$cantidad','$producto','$usuario',$carga,'$tipo_tuberia','$proteccion','$longitud','$factor_potencia')";

        //$valoresQ= substr($valores,0,-1);

        $sql = ("CALL conversiones.calculo_vatios_amperios_v2  $valores");
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
        $item5 = next($items5);
        $item6 = next($items6);
        $item7 = next($items7);
        $item8 = next($items8);


        if ($item1 === false && $item2 === false && $item3 === false && $item4 === false && $item5 === false && $item6 === false && $item7 === false && $item8 === false)
            break;

    }
}
?>