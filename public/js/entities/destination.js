$(function(){

    $('.my-destination-delete').on('click', function(e) {
      e.preventDefault();
  
      $destinationDelete = $(this);
      $destination = $destinationDelete.closest('.my-destination');
      destinationLabel = $destination.find('.my-filter-target').text();
  
  
      $.ajax({
        
        url: $destinationDelete.attr('data-url'),
        method: 'delete',
        
        data: {
          _token: $destinationDelete.attr('data-token')
        },
        
  
        success : function(data) {
  
          if(data === "ok") {
            
            $('#my-entity-delete-status')
              .addClass('my-entity-delete-status-ok')
              .removeClass('d-none')
              .html(`<i>"${destinationLabel}"</i> has successfully been deleted`);
  
            $destination.remove();
  
          } 
  
  
          else {
            
            $('#my-entity-delete-status')
              .addClass('my-entity-delete-status-ko')
              .removeClass('d-none')
              .html(`Something went wrong when attempting to delete <i>"${destinationLabel}"</i>`);
  
          }
  
        },
        
  
        error: function (error) {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .text(error.responseJSON.message);
        
        },


        complete: function () {
          resizeLayout();
        }
  
      });
    });
  
  });
  
  