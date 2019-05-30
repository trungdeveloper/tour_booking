$(function(){

  $('.my-tour-image-delete').on('click', function(e) {
    e.preventDefault();

    $tourImageDelete = $(this);
    $tourImage = $tourImageDelete.closest('.my-tour-image');


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
            .html(`Image has successfully been deleted`);

          $tourImage.remove();

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
          .text(error);
        
      },


      complete: function () {
        resizeLayout();
      }

    });
  });


  $('.my-tour-image-set-as-main').on('click', function(e) {
    e.preventDefault();

    $tourImageSetAsMain = $(this);
    $tourImage = $tourImageSetAsMain.closest('.my-tour-image');


    $.ajax({

      url: $tourImageSetAsMain.attr('data-url'),
      method: 'patch',

      data: {
        _token: $tourImageSetAsMain.attr('data-token')
      },


      success : function(data) {

        if(data === "ok") {

          $('.my-tour-image-is-main').addClass('d-none');
          $('.my-tour-image-set-as-main').removeClass('d-none');
          
          $tourImage.find('.my-tour-image-is-main').removeClass('d-none');
          $tourImage.find('.my-tour-image-set-as-main').addClass('d-none');
          
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
          .text(error);
        
      },


      complete: function () {
        resizeLayout();
      }

    });
  });

});

