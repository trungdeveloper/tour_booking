$(function(){

    $('.my-user-delete').on('click', function(e) {
      e.preventDefault();
  
      $userDelete = $(this);
      $user = $userDelete.closest('.my-user');
      userLabel = $user.find('.my-filter-target').text();
  
  
      $.ajax({
        
        url: $userDelete.attr('data-url'),
        method: 'delete',
        
        data: {
          _token: $userDelete.attr('data-token')
        },
        
  
        success : function(data) {
  
          if(data === "ok") {
            
            $('#my-entity-delete-status')
              .addClass('my-entity-delete-status-ok')
              .removeClass('d-none')
              .html(`<i>"${userLabel}"</i> has successfully been deleted`);
  
            $user.remove();
  
          } 
  
  
          else {
            
            $('#my-entity-delete-status')
              .addClass('my-entity-delete-status-ko')
              .removeClass('d-none')
              .html(`Something went wrong when attempting to delete <i>"${userLabel}"</i>`);
  
          }
  
        },
        
  
        error: function (error) {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .text(error);
        
        }
  
      });
    });
    
  });
  
  