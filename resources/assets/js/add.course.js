$(document).ready(function(){ 

    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('#ajax').attr('value')
        }
    });

    $('.add-course').click(function(){               
        var token = $('#ajax').attr('value');
        var id = event.target.getAttribute('value');                
        $.ajax({
            url: window.location.origin + '/course/add',            
            type: "post",
            data: {
                _token: token,                
                id: id
            },
            success: function(respond){        
                alert(respond);        
            }
        })        
    });
  
  
  });