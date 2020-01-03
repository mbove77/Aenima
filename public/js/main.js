
// navbar-burger logic
document.addEventListener('DOMContentLoaded', () => {
   const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {
        const target = el.dataset.target;
        const $target = document.getElementById(target);
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});

// slider logic
let start = true;
const sliderInter = 7000;
const scrollAnim  = 2000;
let timeWidth = 0;
let currentItemIndex = 0;

$( document ).ready(function() {
    timeWidth = $('.indicator-block').offset().left;
    butonPlayPause(start);
    $(".time-indicator").animate({width: timeWidth}, sliderInter);

    // Hace para el slider on mouse over de distintos elementos.
    /*$('.indicator-block').hover(function() { start = false; butonPlayPause(start)}, function() {start = true;  butonPlayPause(start)});
    $('.title-block').hover(function() { start = false; butonPlayPause(start) }, function() {start = true; butonPlayPause(start)});
    $('.subtitle').hover(function() { start = false;  butonPlayPause(start) }, function() {start = true;  butonPlayPause(start)});
    $('.subtitle-block').hover(function() { start = false;  butonPlayPause(start) }, function() {start = true;  butonPlayPause(start)});*/

    let i = 0; let elements = $('#carousel').children();
    let myInterval = setInterval(function () {
      if(start) {
          $(".time-indicator").css("width", 0); $(".time-indicator").stop(); $(".time-indicator").animate({width: timeWidth}, sliderInter);
          (i < elements.length - 1) ? i++ : i = 0;
          scrollToSlide(elements[i]);
          currentItemIndex = i;
      }
    }, sliderInter);
});

function scrollToSlide(element) {
    $('#carousel').scrollTo(element, {duration: scrollAnim});
}

function butonPlayPause(isPlay) {
    const playCont = $('.icon');
    const playElement   = "<i class='fas fa-play-circle' onclick='handeClick()'/>";
    const pauseElement  = "<i class='fas fa-pause-circle' onclick='handeClick()'/>";
    $(".time-indicator").stop();

    if(isPlay) {
        playCont.empty();
        playCont.append(playElement);
        $(".time-indicator").animate({width: timeWidth}, sliderInter);
    } else {
        playCont.empty();
        playCont.append(pauseElement);
    }
}

function handeClick() {
    start = !start;
    butonPlayPause(start);
}

$(window).focus(function() {
    start = true;
    butonPlayPause(start);
}).blur(function() {
    start = false;
    butonPlayPause(start);
});
