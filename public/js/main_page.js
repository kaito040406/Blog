$(document).on('click', '.content_box_mini_1', function(e) {
  e.preventDefault();
  $.pjax({
    url : '/introduction',
    container : '.change_box',
		fragment : '.intro_box',
  });
});