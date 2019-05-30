$(function(){

  $('.my-country-delete').on('click', function(e) {
    e.preventDefault();

    $countryDelete = $(this);
    $country = $countryDelete.closest('.my-country');
    countryLabel = $country.find('.my-filter-target').text();


    $.ajax({
      
      url: $countryDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $countryDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`<i>"${countryLabel}"</i> has successfully been deleted`);

          $country.remove();

        } 


        else {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete <i>"${countryLabel}"</i>`);

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

