<head>
  
  <title>Fecha actual</title>
  <script>
    window.addEventListener('DOMContentLoaded', function () {
      var fechaDiv = document.getElementById('fecha');
      var fechaActual = new Date();
      var dia = fechaActual.getDate();
      var mes = fechaActual.getMonth();
      var anio = fechaActual.getFullYear();

      // Array con los nombres de los meses
      var nombresMeses = [
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
      ];

      var fechaFormateada = dia + ' de ' + nombresMeses[mes] + ' de ' + anio;
      fechaDiv.innerHTML = fechaFormateada;
    });
  </script>
</head>
<style type="text/css">
  div#texto1 {
    float: right;
  }

  div#contador {
    float: left;
  }

  div#texto3 {
    float: right;
    display: grid;
    padding: 3px 10px;
    border: white 5px ridge;
    border-radius: 20px;
  }
</style>

<body>
  <div>
    <span>
      <img src="img/Koncet.png" width="150px" height="50px">
    </span>
    <span>
      <div id = "contador">
          <a title="contador de visitas gratis"><img src="https://counter3.optistats.ovh/private/contadorvisitasgratis.php?c=g8l968xtar7z3e2jp1udpub19eu69hs6" border="0" title="contador de visitas gratis" alt="contador de visitas gratis"></a>
      </div>
    
    </span>
    <span>
      <span>
        <div id="texto1">
          <span>
            <div id="texto3">
              <div id="fecha"></div>
            </div>
          </span>
        </div>
      </span>
    </span>
  </div>
</body>