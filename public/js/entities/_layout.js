$(window).resize(function(){
  resizeIconsAndLabels('my-sidebar-action-icon', 'my-sidebar-action-label');
  $('#my-navbar-content').collapse('hide');
  resizeLayout();
});


$(function(){
  resizeIconsAndLabels('my-sidebar-action-icon', 'my-sidebar-action-label');
  resizeLayout();

  $('#my-navbar-content').on('shown.bs.collapse hidden.bs.collapse', function(){
    resizeIconsAndLabels('my-sidebar-action-icon', 'my-sidebar-action-label');
    resizeLayout();
  });
});