$(function(){

  $('.my-hotelImage-delete').on('click', function(e) {
    e.preventDefault();

    $hotelImageDelete = $(this);
    $hotelImage = $hotelImageDelete.closest('.my-hotelImage');
    $label = $hotelImageDelete.closest('.my-hotel');
    // hotelImageLabel = $hotelImage.find('.my-filter-target').text();


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
          if ($label.children('.row').children().length == 0) {
            $label.remove();
          }  

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

