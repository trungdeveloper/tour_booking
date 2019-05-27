$(function(){

  $('.my-tour-image-delete').on('click', function(e) {
    e.preventDefault();

    $tourImageDelete = $(this);
    $tourImage = $tourImageDelete.closest('.my-tour-image');
    tourImageLabel = $tourImage.find('.my-filter-target').text();


    $.ajax({
      
      url: $tourImageDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $tourImageDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`<i>"${tourImageLabel}"</i> has successfully been deleted`);

          $tourImage.remove();

        } 


        else {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete <i>"${tourImageLabel}"</i>`);

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

