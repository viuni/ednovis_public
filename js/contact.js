$(document).ready(function () {
  // var opacityStatusMsg = false;
  // var opacityStatusLoc = false;
  //  $('.message').click(function () {
  //    if(!opacityStatusMsg) {
  //      $('.iframe-div').css('visibility', 'hidden');
  //      $('.iframe-div').css('opacity', 0);
  //      $('.textarea-section').css('visibility', 'visible');
  //      $('.textarea-section').css('opacity', 1);
  //      opacityStatusMsg = true;
  //      opacityStatusLoc = false;
  //    } else {
  //      $('.iframe-div').css('visibility', 'hidden');
  //      $('.iframe-div').css('opacity', 0);
  //      $('.textarea-section').css('visibility', 'hidden');
  //      $('.textarea-section').css('opacity', 0);
  //      opacityStatusMsg = false;
  //      opacityStatusLoc = false;
  //    }
  // });
  // $('.location').click(function () {
  //   if(!opacityStatusLoc) {
  //     $('.textarea-section').css('visibility', 'hidden');
  //     $('.textarea-section').css('opacity', 0);
  //     $('.iframe-div').css('visibility', 'visible');
  //     $('.iframe-div').css('opacity', 1);
  //     opacityStatusLoc = true;
  //     opacityStatusMsg = false;
  //   } else {
  //     $('.textarea-section').css('visibility', 'hidden');
  //     $('.textarea-section').css('opacity', 0);
  //     $('.iframe-div').css('visibility', 'hidden');
  //     $('.iframe-div').css('visibility', 'hidden');
  //     $('.iframe-div').css('opacity', 0);
  //     opacityStatusLoc = false;
  //     opacityStatusMsg = false;
  //   }
  // });
  // var audio = $('audio')[0];
  // var audio2 = $('audio')[1];
  // audio.volume = 0.2;
  // audio2.volume = 0.5;
  // $('.message').mouseenter(function () {
  //   audio.play();
  // });
  // $('.location').mouseenter(function () {
  //   audio.play();
  // });
  // $('.message').click(function () {
  //   audio2.play();
  // });
  // $('.location').click(function () {
  //   audio2.play();
  // });
  //
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
