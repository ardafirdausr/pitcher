$(document).ready(function(){

    $('.add-course').click(function(){                
        var token = $('#ajax').attr('value');
        console.log(token );
        $.ajax({
            url: window.location.origin + '/course/add',            
            type: "post",
            data: {
                _token: token,
            },
            success: function(respond){        
                alert(respond);        
            }
        })        
    });
  
  
  });