$(window).on('load resize', function(){
  resizeSimpleImages();
});


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
            .html(`Something went wrong when attempting to delete image`);

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


  $('.my-hotel-image-set-as-main').on('click', function(e) {
    e.preventDefault();

    $hotelImageSetAsMain = $(this);
    $hotelImage = $hotelImageSetAsMain.closest('.my-hotel-image');


    $.ajax({

      url: $hotelImageSetAsMain.attr('data-url'),
      method: 'patch',

      data: {
        _token: $hotelImageSetAsMain.attr('data-token')
      },


      success : function(data) {

        if(data === "ok") {

          $('.my-hotel-image-is-main').addClass('d-none');
          $('.my-hotel-image-set-as-main').removeClass('d-none');
          
          $hotelImage.find('.my-hotel-image-is-main').removeClass('d-none');
          $hotelImage.find('.my-hotel-image-set-as-main').addClass('d-none');
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`Image has successfully been set as main`);

        } 


        else {

          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to set as main`);

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
        resizeSimpleImages();
      }

    });
  });

});

