$(function(){

  $('.my-identification-type-delete').on('click', function(e) {
    e.preventDefault();

    $identificationTypeDelete = $(this);
    $identificationType = $identificationTypeDelete.closest('.my-identification-type');
    identificationTypeLabel = $identificationType.find('.my-filter-target').text();


    $.ajax({
      
      url: $identificationTypeDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $identificationTypeDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`<i>"${identificationTypeLabel}"</i> has successfully been deleted`);

          $identificationType.remove();

        } 


        else {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete <i>"${identificationTypeLabel}"</i>`);

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

