<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Menu </title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
       
    </style>
</head>

<body>
<div class="pestanas">
  <button class="pestana-activa" onclick="mostrarContenido(0)">Pestaña 1</button>
  <button onclick="mostrarContenido(1)">Pestaña 2</button>
  <button onclick="mostrarContenido(2)">Pestaña 3</button>
</div>

<div class="contenido">
  <div class="contenido-item" style="display: block;">Contenido de la Pestaña 1</div>
  <div class="contenido-item">Contenido de la Pestaña 2</div>
  <div class="contenido-item">Contenido de la Pestaña 3</div>
</div>

<script>
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

</html>