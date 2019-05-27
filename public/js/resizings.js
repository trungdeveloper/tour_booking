function resizeIconsAndLabels(elementLeft, elementRight){

  $elementLeft = $(document.getElementsByClassName(elementLeft));
  $elementRight = $(document.getElementsByClassName(elementRight));

  $elementLeft.css('width', 'auto');
  $elementRight.css('width', 'auto');

  var widthElementLeft, widthElementRight = 0;

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


function getScrollBarWidth() {

  var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body');
  var widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();

  $outer.remove();
  return 100 - widthWithScroll;

}