$(document).ready(function(){
    //customers table
    $('table tbody tr').hover(function(){
       $(this).addClass('highlight');
    },function(){
        $(this).removeClass('highlight');
    }).dblclick(function(){
        var id=$(this).attr('id');
        $('#x_'+id).hide();
        $('#input_x_'+id).show();
        $('#a_'+id).hide();
        $('#input_a_'+id).show();
        $('#b_'+id).hide();
        $('#input_b_'+id).show();  
        $('#c_'+id).hide();
        $('#input_c_'+id).show();  
        $('#d_'+id).hide();
        $('#input_d_'+id).show();  
        $('#e_'+id).hide();
        $('#input_e_'+id).show();
        $('.delete').hide();
        
       
    }).change(function(){
        var id = $(this).attr('id');
        var x = $('#input_x_'+id).val();
        var a = $('#input_a_'+id).val();
        var b = $('#input_b_'+id).val();
        var c = $('#input_c_'+id).val();
        var d = $('#input_d_'+id).val();
        var e = $('#input_e_'+id).val();
        var data = 'id='+ id + '&company_name='+ x +  '&contact_name='+ a + '&address=' + b + '&city=' + c + '&contact_num=' + d + '&email=' + e;
        
        
        if(a.length>0 && b.length>0 && c.length>0 && d.length>0 && e.length>0){
            $.ajax({
               url: 'customers_update.php',
               type: "POST",
               data: data,
               success: function(html){
                   $('#x_'+id).html(x);
                   $('#a_'+id).html(a);
                   $('#b_'+id).html(b);
                   $('#c_'+id).html(c);
                   $('#d_'+id).html(d);
                   $('#e_'+id).html(e);
                   $('#alert').fadeIn('slow').delay(300).fadeOut('slow');
               }
            });
        }else{
            alert('Please fill all fields');
        }
    })
    
    // Edit input box click action
    $(".editbox").mouseup(function(){
        return false;
    });

    $('#reports_table ul li a').click(function(e){
       e.preventDefault();
       var href = $(this).attr('href');
       if(href=='orders'){
           $('#inventory').slideUp('slow');
           $('#orders').slideDown('slow');
           $('.inventory').removeClass('highlight')
           $('.orders').addClass('highlight');
       }else{
           $('#orders').slideUp('slow');
           $('#inventory').slideDown('slow');
           $('.orders').removeClass('highlight')
           $('.inventory').addClass('highlight');
       }
    });
    $('.delete').click(function(){
        var id = $(this).attr('id');
        data = 'id='+id;
        if(confirm('Are you sure you want to delete this row?')){
            $.ajax({
                url: 'customers_delete.php',
                type: "POST",
                data: data,
                success: function(html){
                    $('.tr_'+id).fadeOut('slow', function(){
                       $(this).remove(); 
                    });
                }
            });
        }
    });
    // add data
    $('.add').click(function(e){
        e.preventDefault();
        $('#add_data').fadeIn('slow');
    });
    $('#cancel').click(function(){
        $('#add_data').fadeOut('slow');
    })
    $('#submit').click(function(){
        var company_name = $('#company_name').val();
        var contact_name = $('#contact_name').val();
        var address = $('#address').val();
        var city = $('#city').val();
        var contact_number = $('#contact_number').val();
        var email = $('#email').val();
        var data = 'company_name=' + company_name+ '&contact_name=' + contact_name + '&address='+ address + '&city=' + city + '&contact_number=' + contact_number + '&email=' + email;
        
        if(company_name == '' || contact_name == '' || address == '' || city == '' || contact_number == '' ||    email == ''){
            alert('Please fill all fields');
        }else{
            $.ajax({
                url: 'customers_add.php',
                type: 'POST',
                data: data,
                success: function(html){
                    alert('One data added!');
                    $('#add_data').fadeOut('slow');
                    location.reload();
                }
            });
        }
    }); 
    $('.print').click(function(){
        $('.add,.delete,.print').hide();
        $('#customers_table').print();
    });
    $('.print_i').click(function(){
        $('.add,.delete,.print_i').hide();
        $('#inventory').print();
    });
      $('.print_o').click(function(){
        $('.add,.delete,.print_o').hide();
        $('#orders').print();
    });
      $('.print_p').click(function(){
        $('.add,.delete,.print_p').hide();
        $('#products_table').print();
    });
}).mouseup(function(){
        $('.editbox').hide();
        $('.text').show();
        $('.delete').show();
});

