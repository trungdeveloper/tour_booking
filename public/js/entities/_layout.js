$(window).on('load resize', function(){
  resizeWelcomeSlides();
});


$(window).resize(function(){
  resizeIconsAndLabels('my-sidebar-action-icon', 'my-sidebar-action-label');
  resizeIconsAndLabels('my-action-button-icon', 'my-action-button-label');
  $('#my-navbar-content').collapse('hide');
  resizeLayout();
});


$(function(){
  resizeIconsAndLabels('my-sidebar-action-icon', 'my-sidebar-action-label');
  resizeIconsAndLabels('my-action-button-icon', 'my-action-button-label');
  resizeLayout();

  $('#my-navbar-content').on('shown.bs.collapse hidden.bs.collapse', function(){
    resizeIconsAndLabels('my-sidebar-action-icon', 'my-sidebar-action-label');
    resizeIconsAndLabels('my-action-button-icon', 'my-action-button-label');
    resizeLayout();
    resizeWelcomeSlides();
  });
});