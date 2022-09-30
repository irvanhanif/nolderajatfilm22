AOS.init({
    duration: 1200
});

$(window).on('load', function(){
    setTimeout(removeLoader, 000); 
    function removeLoader(){
        $( "#bgload" ).fadeOut();
    }
});