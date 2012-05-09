$(document).ready(function(){
    $('.box').click(function(e) {
        e.preventDefault();
        $('.navigation').css('z-index','0');
        var href = $(this).attr('href');
        $('.show').live('click',function(){
        var title = $(this).attr('title'); 
        $('.caption').html(title);
        });
        $('body').animate({scrollTop:0}, 500);
        $('#backdrop').fadeIn('slow',function(){
            $('#content, #footer').fadeOut('slow');
            $('#lightbox').slideDown('slow').append("<img class='prods' src='"+href+"'/>");
        });
    });
    $('#close').click(function() {
        $('.navigation').css('z-index','5');
        $('#lightbox').slideUp('slow',function() {
            $('#content, #footer').fadeIn('slow');
            $('#backdrop').fadeOut('slow');
            $('body').animate({scrollTop:1050}, 1000);
            $('.prods').remove();
        });
    });   
    $('#caption').hover(function(){
        $(this).animate({opacity: 1},200);
    }, function(){
        $(this).animate({opacity: 0},200);
    });
});