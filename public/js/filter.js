$(document).ready(function(){
  
  $(".my-filter").on("keyup", function() {
    
    var value = $(this).val().toLowerCase();
    
    $(".my-filter-target").filter(function() {
      $(this).closest('.my-filter-object').toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  
  });

});