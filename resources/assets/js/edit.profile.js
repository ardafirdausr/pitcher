$(document).ready(function(){

  $('#edit-profile-province').change(function(){
    $.ajax({
      url: window.location.origin + '/indonesia/province/' + $('#edit-profile-province').val() + '/cities',
      success: function(respond){        
        $('#edit-profile-city').val('');        
        $('#edit-profile-city').html('<option value="">Kota</option>');
        cities = respond.cities;
        for(i in cities){
          $('#edit-profile-city').append('<option value=' + cities[i].id +'>' + cities[i].name + '</option>');
        }
      }
    })
  });


});