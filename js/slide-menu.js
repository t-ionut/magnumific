var $ = jQuery;

$(document).ready(function() {
    var menu = $('.slide-menu');
    var close = $('#close');
    var offset = menu.outerWidth() + 50;
    menu.css({
        'right': '-' + offset + 'px',
        'display': 'inline'
    });

    function showMenu() {
        var offset = menu.outerWidth() + 50;
        menu.animate({'right': 0}, 500);
        close.click(function() {
            menu.animate({'right': -offset}, 500);
        });
    }
    $('.partners > *').click(function() {
        showMenu();
    });
});