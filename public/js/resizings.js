function resizeIconsAndLabels(elementLeft, elementRight){

  $elementLeft = $(document.getElementsByClassName(elementLeft));
  $elementRight = $(document.getElementsByClassName(elementRight));

  $elementLeft.css('width', 'auto');
  $elementRight.css('width', 'auto');

  var widthElementLeft = 0;
  var widthElementRight = 0;

  $elementLeft.each(function(){
    if (parseFloat($(this).css('width')) > widthElementLeft) {
      widthElementLeft = parseFloat($(this).css('width'));
    }
  });

  $elementRight.each(function(){
    if (parseFloat($(this).css('width')) > widthElementRight) {
      widthElementRight = parseFloat($(this).css('width'));
    }
  });

  $elementLeft.css('width', widthElementLeft);
  $elementRight.css('width', widthElementRight);
}


function resizeLayout(){

  $('body > header, aside, main > header, main > article').css('height', 'auto');

  var headerHeight = parseFloat($('body > header').css('height'));
  var mainHeaderHeight = parseFloat($('main > header').css('height'));
  var asideHeight = parseFloat($('aside').css('height'));
  var asideWidth = parseFloat($('aside').css('width'));

  $('aside').css('top', headerHeight);

  $('main > header, main > article')
    .css('width', '100vw')
    .css('width', "-=15px");

  
  $('main > article')
    .css('height', '100vh')
    .css('height', "-=" + headerHeight + "px")
    .css('height', "-=" + mainHeaderHeight + "px");


  if(Modernizr.mq('(min-width: 768px)')) {

    $('aside').css('height', '100vh').css('height', "-=" + headerHeight + "px");
    $('main > header').css('top', headerHeight);
    $('main > header, main > article').css('width', "-=" + asideWidth + "px");
    $('main > article').css('top', headerHeight + mainHeaderHeight);
  
  } else {

    $('aside').css('width', '100vw');
    $('main > header').css('top', headerHeight + asideHeight);
    
    $('main > article')
      .css('top', headerHeight + asideHeight + mainHeaderHeight)
      .css('height', "-=" + asideHeight + "px");

  }

  
  // if scrollbar
  if($('main > article').get(0).scrollHeight > $('main > article').get(0).offsetHeight){
    $('main > header').css('width', "-=" + getScrollBarWidth() + "px");
  }

}


function resizeWelcomeSlides(){

  $('#my-welcome-slides-hidden').removeClass('d-none');

  var iterator = 0;
  var sumHeight = 0;

  $('#my-welcome-slides-hidden img').css('height', 'auto');

  $('#my-welcome-slides-hidden img').each(function(){
    sumHeight += parseFloat($(this).css('height'));
    iterator++;
  });


  newHeight = sumHeight / iterator

  if (iterator > 0) {
    $('#my-welcome-slides img').each(function(){
      $(this).css('height', newHeight);
      // $(this).css('width', parseFloat($(this).css('width')) * newHeight / parseFloat($(this).css('height')));
    });
  }


  $('#my-welcome-slides-hidden').addClass('d-none');

}


function resizeSimpleImages() {

  var subElements = [
      $("#my-entity-images-landscape"),
      $("#my-entity-images-portrait")
    ];
  

  $.when(deferredSimpleImageReorganize()).done(function() {

    $.each(subElements, function(index, $subElement) {
      resizeImagePart($subElement);
    });

  });

}


function resizeImages($element) {

  var subElements = [
      $element.find(".my-entity-images-landscape"),
      $element.find(".my-entity-images-portrait")
    ];
  

  $.when(deferredImageReorganize($element)).done(function() {

    $.each(subElements, function(index, $subElement) {
      resizeImagePart($subElement);
      resizeParts($subElement);
    });

  });

}


var getScrollBarWidth = function () {

  var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body');
  var widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();

  $outer.remove();
  return 100 - widthWithScroll;

}


var resizeImagePart = function($element) {

  $element.find(".my-entity-image img").css('height', 'auto');

  if (Modernizr.mq('(min-width: 576px)')) {

    var quantityOfImages = $element.find(".my-entity-image img").length;

    if (quantityOfImages < 1) {
      return;
    }

    var quantityOfLandscapeImage = 0;
    var idxImage = 0;
    var sumHeight = 0;
    
    $element.find(".my-entity-image img").each(function() {
      if (parseFloat($(this).css('width')) > parseFloat($(this).css('height'))) {
        return quantityOfLandscapeImage++;
      }
    });

    
    $element.find(".my-entity-image img").each(function() {
      
      var width = parseFloat($(this).css('width'));
      var height = parseFloat($(this).css('height'));
      
      switch (true) {
    
        case quantityOfLandscapeImage === 0:
        case (quantityOfLandscapeImage > 0 && width > height):
          idxImage++;
          sumHeight += height;
    
      }

    });


    var newHeight = sumHeight / idxImage;

    $element.find(".my-entity-image img").each(function() {
      $(this).css('height', newHeight);
    });

  }

};


var resizeParts = function($element) {

  var parts = ['.my-entity-name', '.my-entity-rating', '.my-entity-price'];

  $.each(parts, function(index, part){

    $element.find(part).css('height', 'auto');

    if (Modernizr.mq('(min-width: 576px)')) {

      var partHeight = 0;

      $element.find(part).each(function() {
        
        var height = parseFloat($(this).css('height'));

        if (height > partHeight) {
          partHeight = height;
        }
      
      });

      $element.find(part).css('height', partHeight);

    }

  });

};


var deferredImageReorganize = function($element) {

  var deferred = $.Deferred();
  var deferredReorganize = $.Deferred();

  var quantityOfImages = $element.find('.my-entity-images-all-formats .my-entity').length;
  var iterator = 0;

  if (quantityOfImages < 1) {
    deferredReorganize.resolve();
  }

  
  $element.find('.my-entity-images-all-formats .my-entity').each(function() {

    var $entity = $(this);
    var $entityImage = $entity.find('.my-entity-image');

    var width = $entityImage.length ? parseFloat($entityImage.css('width')) : null;
    var height = $entityImage.length ? parseFloat($entityImage.css('height')) : null;

    

    switch (true) {

      case (!width):
      case (!height):
        break;
      
      case (width >= height):
        $element.find('.my-entity-images-landscape').append($entity);
        break;
      
      case (width < height):
        $element.find('.my-entity-images-portrait').append($entity);

    }
  

    iterator++;
  
    if (iterator >= quantityOfImages) {
      return deferredReorganize.resolve();
    }
  
  });


  return $.when(deferredReorganize).done(function() {
    return deferred.resolve();
  });

};


var deferredSimpleImageReorganize = function($element) {

  var deferred = $.Deferred();
  var deferredReorganize = $.Deferred();

  var quantityOfImages = $('#my-entity-images-all-formats .my-entity-image').length;
  var iterator = 0;

  if (quantityOfImages < 1) {
    deferredReorganize.resolve();
  }


  $('#my-entity-images-all-formats .my-entity-image').each(function() {

    var $entityImage = $(this);
    var $image = $entityImage.find('img');

    var width = $image.length ? parseFloat($image.css('width')) : null;
    var height = $image.length ? parseFloat($image.css('height')) : null;

    

    switch (true) {

      case (!width):
      case (!height):
        break;
      
      case (width >= height):
        $('#my-entity-images-landscape').append($entityImage);
        break;
      
      case (width < height):
        $('#my-entity-images-portrait').append($entityImage);

    }
  

    iterator++;
  
    if (iterator >= quantityOfImages) {
      return deferredReorganize.resolve();
    }
  
  });


  return $.when(deferredReorganize).done(function() {
    return deferred.resolve();
  });

};
