$(document).ready(function() {

    $('[role="header"]').stick_in_parent({
        parent: 'body',
        sticky_class: 'sticky'
    });

    $('.event-grid .grid').mixItUp({
        selectors: {
            target: '.tile'
        }
    });

});