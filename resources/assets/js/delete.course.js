$(document).ready(function(){ 

    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('#ajax').attr('value')
        }
    });

    $('.deleteCourse').click(function(){               
        var token = $('#ajax').attr('value');
        var id = event.target.getAttribute('value');                
        $.ajax({
            url: window.location.origin + '/course/delete',            
            type: "post",
            data: {
                _token: token,                
                id: id
            },
            success: function(respond){                                        
                $('#total').html(Number($('#total').html()) - Number(respond));
            }
        })        
    });
  
  
  });