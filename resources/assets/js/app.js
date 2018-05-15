$(document).ready(function(){    
    $('.menu .item').tab();
    $('.ui.dropdown').dropdown();    
    $('.ui.accordion').accordion()
    // $('.ui.sticky').sticky({context: '#main-container'});    
    $('.ui.radio.checkbox').checkbox();
    $('.message .close').on('click', function() {
        $(this).closest('.message').transition('fade');
    });
});