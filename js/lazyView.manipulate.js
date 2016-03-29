$(document).ready(function() {
    var lazyElements = ['.nav-expanded', 
                        '#about .banner', 
                        '.about-blocks', 
                        '.reason-blocks', 
                        '.partners', 
                        '.team', 
                        '.jobs',
                        '#contact-details'];

    lazyElements.forEach(function(elm) {
        $(elm).lazyView();
    });
});