$(window).on('load resize', function(){
  resizeIconsAndLabels('my-tour-icon', 'my-tour-label');

  $('.my-destination').each(function(){
    resizeImages($(this));
  });
});


$(function(){

  $('.my-tour-delete').on('click', function(e) {
    e.preventDefault();

    $tourDelete = $(this);
    $tour = $tourDelete.closest('.my-tour');
    $destination = $tour.closest('.my-destination');
    tourLabel = $tour.find('.my-filter-target').text();


    $.ajax({
      
      url: $tourDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $tourDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          
          $tour.remove();

          if($destination.find('.my-tour').length < 1) {
            $destination.remove();
          }

          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`<i>"${tourLabel}"</i> has successfully been deleted`);

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
        .text(error.responseJSON.message);
        
      },


      complete: function () {
        resizeLayout();
      }

    });
  });

});

