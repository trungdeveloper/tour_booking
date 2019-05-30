$(window).on('load resize', function(){
  resizeIconsAndLabels('my-customer-message-icon', 'my-customer-message-label');
});


$(function(){

  $('.my-customer-message-delete').on('click', function(e) {
    e.preventDefault();

    $customerMessageDelete = $(this);
    $customerMessage = $customerMessageDelete.closest('.my-customer-message');


    $.ajax({
      
      url: $customerMessageDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $customerMessageDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`Message has successfully been deleted`);

          $customerMessage.remove();

        } 


        else {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete message`);

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

