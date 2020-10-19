$(function() {
    'use strict';
    var copiaNav = $('.navegacion').clone();
    $('footer').prepend(copiaNav);

    var texto = $('main article:nth-child(2) h3').text();

    console.log(texto);

    $('.principal article:nth-child(2) h3').text("Cerca a la playa, y centros de diversión");

    /***************** */
    //variables

    var nav = '.navegacion';
    let etiquetasHeader = 'etq';


    //eventos
    $(nav).hide();
    $(etiquetasHeader).hide();

    $('header img').on('mouseleave', function() {
        $(nav).show(5000);
        $(etiquetasHeader).show(2000);
    });



    //$('pictures').on('mouseenter', cambiarImagen);
    $('pictures').on('mouseleave', function() {
        $(this).attr('src', 'img/anuncio2.jpg');
    });

    $('.navegacion a').on('mouseenter', function() {

        $(this).addClass('nav-estilo');

    });
    $('.navegacion a').on('mouseleave', function() {
        $(this).removeClass('nav-estilo');
    });

    $('pictures').on('mouseenter', function() {
        $(this).css('width', '100%');
    });
    $('pictures').on('mouseleave', function() {
        $(this).css('width', '300px');
    });

    $('header h1').css('color', 'red');
    $('header h1').css('text-transform', 'upercase');

    var enunciado = '.principal article:nth-child(2) h4';
    $(enunciado).show();
    $('.principal article:nth-child(2) a').on('mouseenter', function() {
        //$(enunciado).toggle();
    });
    $('#datos_cotizar').hide();
    $('#cotizar_ob').click(function() {
        $('#datos_cotizar').toggle();

    })

    $('#clientes').animateNumber({ number: 120 }, 12000);
    $('#viajes').animateNumber({ number: 2500 }, 6000);
    $('#paquetes').animateNumber({ number: 50 }, 25000);
    $('#promociones').animateNumber({ number: 20 }, 30000);
    //funciones

    function cambiarImagen() {
        $(this).attr('src', 'img/anuncio1_info.jpg');
    }




});