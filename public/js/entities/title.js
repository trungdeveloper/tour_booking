$(function(){

  $('.my-title-delete').on('click', function(e) {
    e.preventDefault();

    $titleDelete = $(this);
    $title = $titleDelete.closest('.my-title');
    titleLabel = $title.find('.my-filter-target').text();


    $.ajax({
      
      url: $titleDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $titleDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`<i>"${titleLabel}"</i> has successfully been deleted`);

          $title.remove();

        } 


        else {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete <i>"${titleLabel}"</i>`);

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

