$(function(){

  $('.my-hotel-image-delete').on('click', function(e) {
    e.preventDefault();

    $hotelImageDelete = $(this);
    $hotelImage = $hotelImageDelete.closest('.my-hotel-image');


    $.ajax({

      url: $hotelImageDelete.attr('data-url'),
      method: 'delete',

      data: {
        _token: $hotelImageDelete.attr('data-token')
      },


      success : function(data) {

        if(data === "ok") {

          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`Image has successfully been deleted`);

          $hotelImage.remove();

        } 


        else {

          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete `);

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

