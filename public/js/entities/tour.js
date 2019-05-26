$(function(){

  $('.my-tour-delete').on('click', function(e) {
    e.preventDefault();

    $tourDelete = $(this);
    $tour = $tourDelete.closest('.my-tour');
    $label = $tourDelete.closest('.my-tour-type');
    tourLabel = $tour.find('.my-filter-target').text();


    $.ajax({
      
      url: $tourDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $tourDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          
          $('#my-entity-delete-status')
          .addClass('my-entity-delete-status-ok')
          .removeClass('d-none')
          .html(`<i>"${tourLabel}"</i> has successfully been deleted`);

          $tour.remove();
          if ($label.children('.row').children().length == 0) {
            $label.remove();
          } 

        } 


        else {
          
          $('#my-entity-delete-status')
          .addClass('my-entity-delete-status-ko')
          .removeClass('d-none')
          .html(`Something went wrong when attempting to delete <i>"${tourLabel}"</i>`);

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

