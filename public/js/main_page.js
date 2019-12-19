$(function(){
  $(document).on('click', '.content_box_mini_1', function(e) {
    e.preventDefault();
    $(".change_box").animate({
      left : -500,
      opacity : 0
    }, 'fast', function(){
      $.pjax({
        url : '/introduction',
        container : '.change_box',
        fragment : '.intro_box',
        timeout : 1000
      })
    });
    return false;
  });

    $(document).on('pjax:end', function() {
      console.log("ok");
      $(".change_box").animate({
        left : 0,
        opacity : 1
      }, 'fast');
    });
});

