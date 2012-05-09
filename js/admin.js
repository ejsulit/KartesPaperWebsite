$(document).ready(function() {
    $('body').fadeIn('slow');
    $('body').animate({scrollTop:200},2000);
    $('#username,#password').focus(function(){
        $(this).css('background','yellow');
    }).blur(function(){
        $(this).css('background','white');
    });
    $('.submit').click(function(e) {
        e.preventDefault();
        $('#login img').fadeIn().delay(100).fadeOut();
        var username = $('#username').val();
        var password = $('#password').val();
        $.post('login.php', {
            username: username,
            password: password
        }, function(data){
            if(data=='Incorrect Password'){
                $('#display').delay(800).html('Incorrect Password').fadeIn('slow').delay(800).fadeOut('slow');
            }else if(data=='Unknown user'){
                $('#display').delay(800).html('Unknown User').fadeIn('slow').delay(800).fadeOut('slow');
            }else if(data=='Please fill all fields'){
                $('#display').delay(800).html('Please fill all fields').fadeIn('slow').delay(800).fadeOut('slow');
            }else{
                document.location = 'home.php';
            }
        });
    });
    
    //home
    $('#products,#customers,#reports').tablesorter();
    $('.nav_links').click(function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        $('body').animate({scrollTop:400},1000)
        if(href=='customers.php'){
            $('#products_table,#reports_table,#orders,#inventory').fadeOut('slow');
            $('.orders,.inventory').removeClass('highlight');
            $('#customers_table').fadeIn('slow');
        }else if(href=='products.php'){
            $('#customers_table,#reports_table,#orders,#inventory').fadeOut('slow');
            $('.orders,.inventory').removeClass('highlight');
            $('#products_table').fadeIn('slow');
        }else{
            $('#customers_table,#products_table').fadeOut('slow');
            $('#reports_table').fadeIn('slow');
        }
    });
})