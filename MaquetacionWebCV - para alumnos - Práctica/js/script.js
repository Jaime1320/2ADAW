$(document).ready(() => {
    //Hacemos la query para cambiar de oscuro a claro
    $('#oscuro').click(() => {
        if ($(':root').css('--color-principal') == '#FFFFFF') {
            $(':root').css('--color-principal', '#333333');
            $(':root').css('--color-secondary', '#cacaca');
            $(':root').css('--color-title', 'indianred');
            $(':root').css('--color-subtitle', '#ffffff');
            $(':root').css('--color-text', 'indianred');
            $('.oscuro').addClass('fa-regular fa-sun').removeClass('fa-solid fa-moon');
            $('#cambiarSpan').text('Modo Claro');
        } else {
            //Claro
            $(':root').css('--color-principal', '#FFFFFF');
            $(':root').css('--color-secondary', '#EA7C00');
            $(':root').css('--color-title', '#000000');
            $(':root').css('--color-subtitle', '#000000');
            $(':root').css('--color-text', '#000000');
            $('.oscuro').addClass('fa-solid fa-moon').removeClass('fa-regular fa-sun');
            $('#cambiarSpan').text('Modo Oscuro');
        }
    });
    
    $('#fecha').datepicker();
    

    //Mover la pagina de arriba abajo al cargar
    $('.layout').slideUp(250, () => {
        $('.layout').slideDown(250);
    });

    //POP UP
    $('.user-info__btn').click(() => {
        $('#dialog').dialog();
    });
    $('#dialog').hide();
    
    //Animacion para el nombre al cargar
    //Hacemos que primero que se mueva el nombre 
    $('.user-info__name').fadeOut(600, () => {
    $('.user-info__name').fadeIn(600);
    })
    //Hacemos que despues se mueva el H4
    $('.user-info__job').fadeOut(600, () => {
    $('.user-info__job').fadeIn(5000);
    })
    
    //Boton para ir arriba
    $('#scrollToTopBtn').on('click', function() {
        $('.content__page').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

});

//Hacemos el carrousel 
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
});






