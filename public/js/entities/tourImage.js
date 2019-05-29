$(function(){

  $('.my-tour-image-delete').on('click', function(e) {
    e.preventDefault();

    $tourImageDelete = $(this);
    $tourImage = $tourImageDelete.closest('.my-tour-image');
    $label = $tourImageDelete.closest('.my-tour');


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
            .html(`image has successfully been deleted`);

          
          $tourImage.remove();
          if ($label.children('.row').children().length == 0) {
            $label.remove();
          }  

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
      
      },

      complete: function () {
        resizeLayout();
      }

    });
  });

});

