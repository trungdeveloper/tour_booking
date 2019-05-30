$(function(){

  $('.my-service-delete').on('click', function(e) {
    e.preventDefault();

    $serviceDelete = $(this);
    $service = $serviceDelete.closest('.my-service');
    serviceLabel = $service.find('.my-filter-target').text();


    $.ajax({
      
      url: $serviceDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $serviceDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`<i>"${serviceLabel}"</i> has successfully been deleted`);

          $service.remove();

        } 


        else {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete <i>"${serviceLabel}"</i>`);

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

