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
        menu.animate({'right': 0}, 300);
        close.click(function() {
            menu.animate({'right': -offset}, 300);
        });
    }
    $('.partners > *').click(function() {
        showMenu();
    });
});