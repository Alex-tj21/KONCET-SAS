$(document).ready(function(){
    $('ul.tabs li a:first').addClass('active');
    $('.content div').hide();
    $('.content div: first').show();

    $('ul.tabs li a').click(function(){
        $('ul.tabs li a').removeClass('active');
        $(this).addClass('active');
        $('.content div').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).show();
        return false;
    })
})

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