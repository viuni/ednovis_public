
$(document).ready( function () {
  var divFirst = $("#article-first-step");
  var divSecond = $("#article-second-step");
  var divThird = $("#article-third-step");
  var posFirst = divFirst.position();
  var posSecond = divSecond.position();
  var posThird = divThird.position();
  function paralexEffect(windPos, div, posTop, num) {
    if(windPos >= (posTop - num)) {
      div.addClass('afterScroll');
    } else {
      div.removeClass('afterScroll');
    }
  }
  $(window).scroll(function () {
    var windowPos = $(window).scrollTop();
    paralexEffect(windowPos, divFirst, posFirst.top, 400);
    paralexEffect(windowPos, divSecond, posSecond.top, 400);
    paralexEffect(windowPos, divThird, posThird.top, 400);
  });
  var button = $('button.btn-primary');
  button.css('background-color', '#111820');
  button.css('border', 'none');
  if(!button.hasClass('btn-actif')) {
    button.hover(function () {
            button.css('background-color', 'gray');
          }, function () {
            button.css('background-color', '#111820');
          }
    );
  }
  var ul = $('ul.dropdown-menu');
  ul.css('width', '198');

  var li = $('#nav-dropdown li');
  var a = $('#nav-dropdown li a');

  li.hover(
          function() {
            $(this).css('background-color', 'black');
            $(this).children().children().css('color', 'white');

          },
          function() {
            $(this).css('background-color', 'white');
            $(this).children().children().css('color', 'black');
          }
  );
});
