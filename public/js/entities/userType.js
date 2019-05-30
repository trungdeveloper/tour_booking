$(function(){

  $('.my-user-type-delete').on('click', function(e) {
    e.preventDefault();

    $userTypeDelete = $(this);
    $userType = $userTypeDelete.closest('.my-user-type');
    userTypeLabel = $userType.find('.my-filter-target').text();


    $.ajax({
      
      url: $userTypeDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $userTypeDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`<i>"${userTypeLabel}"</i> has successfully been deleted`);

          $userType.remove();

        } 


        else {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete <i>"${userTypeLabel}"</i>`);

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

