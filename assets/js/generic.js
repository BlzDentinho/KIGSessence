function abrir() {
    href = "pop.html"
    window.open(href, 'janela', 'width=660, height=510, top=100, left=699,scrollbars=yes, status=no, toolbar=no, location=no, menubar=no, resizable=no, fullscreen=no')
}

function abrir1() {
    href = "cadastro.html"
    window.open(href, 'janela', 'width=660, height=510, top=100, left=699,scrollbars=yes, status=no, toolbar=no, location=no, menubar=no, resizable=no, fullscreen=no')
}

(function() {
    // setup your carousels as you normally would using JS
    // or via data attributes according to the documentation
    // https://getbootstrap.com/javascript/#carousel
    $('#carousel123').carousel({ interval: 2000 });
    $('#carouselABC').carousel({ interval: 3600 });
}());

(function() {
    $('.carousel-showmanymoveone .item').each(function() {
        var itemToClone = $(this);

        for (var i = 1; i < 4; i++) {
            itemToClone = itemToClone.next();

            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }

            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
                .addClass("cloneditem-" + (i))
                .appendTo($(this));
        }
    });
}());