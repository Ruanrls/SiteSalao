//JQUERY

//âncora suave (todos os elementos que estiverem no menu com os filhos 'a' que tenham # no href)
$("#menu a[href^='#']").on('click', function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 150
    }, 800);
});

//scroller animation
var html = document.documentElement;
html.className += "toAnimate";//garante que apenas a animação funcione apenas caso o javascript esteja habilitado 

function isInView(el) {//retorna se o elemento está ou não visível na tela
    var pixelsTop = $(window).scrollTop();
    var pixelsBot = pixelsTop + $(window).height();//o pixel final, será o tamanho da viewport + a quantidade de pixels rolados

    var topElement = $(el).offset().top;//pega a distância da elemento até o topo da página
    var botElement = topElement + $(el).height();//pega o pixel final do elemento

    return ((pixelsBot >= botElement));//retorna true ou false
}

$(document).ready(function () {

    var $target = $('.anime');//pegamos todos os targets (elementos a serem alterados)

    function animate() {
        $target.each(function () {//para cada um dos targets
            if (isInView(this)) {
                $(this).addClass('animated');
            } else {
                $(this).removeClass('animated');
            }
        });
    }

    animate();//chama o animate a primeira vez para que os elementos que já cabem na tela sejam carregadas
    $(window).scroll(() => {
        animate();
    });
});