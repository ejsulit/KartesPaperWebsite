$(function() {
    // Navigation links
    $('.nav_links').click(function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
            if(href=='home.html'){
                $('body').animate({scrollTop: 250}, 1000);
            }else if(href=='products.html'){
                $('body').animate({scrollTop: 1050}, 1000);
            }else if(href=='about.html'){
                $('body').animate({scrollTop: 2580}, 1000);
            }else if(href=='contact.html'){
                $('body').animate({scrollTop: 3380}, 1000);
            }else{
                $('body').animate({scrollTop: 0}, 1000);
            }
    })
});

