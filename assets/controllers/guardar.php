<?php
require_once "../Models/registro_datos_model.php";
$arrayName = array('cantidad de producto' => $_POST['cantidad de producto'],
 'tipo producto' => $_POST['tipo producto'],
 'v_usuario' =>$_POST['v_usuario'],
  'id_carga' => $_POST['id_carga'],
  'voltaje' =>$_POST['voltaje'],
  'v_tipo_tuberia' =>$_POST['v_tipo_tuberia'],
  'v_conductor' =>$_POST['v_conductor'],
  'v_longitud' =>$_POST['v_longitud']);

  echo json_encode(Registro :: guardar($arrayName));
