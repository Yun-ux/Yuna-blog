console.log('toto');

$('.heart.fa').click(function () {
  $(this).toggleClass('fa-heart fa-heart-o');
});

$(window).scroll(function () {
  var height = $(window).scrollTop();
  if (height > 100) {
    $('#top').fadeIn();
  } else {
    $('top').fadeOut();
  }
});
$(document).ready(function () {
  $('#top').click(function (event) {
    event.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 'slow');
    return false;
  });
});
