/* OJO OLUWASEUN JOSEPH */

$(function(){
  $('#submit-me').submit(function(){

   url = $ (this).attr('action');
   data = $ (this).serialize();

   $.post(url, data, function(response){
     if(response.status == '0'){
        $("#responseDiv").html("<div class='alert alert-danger'><b>" + response.text + "</b></div>");
     }

     if(response.status == '1'){
        $("#responseDiv").html("<div class='alert alert-success'><b>" + response.text + "</b></div>");
     }

   }, 'json');

    return false;

  });
});