
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
$( document ).ready(function() {
  const sliderInter = 5000;
  const scrollAnim  = 2000;
  const start = false;

  if(start) {
    let i = 0;
    let elements = $('#carousel').children();
    let myInterval = setInterval(function () {
      (i < elements.length - 1) ? i++ : i = 0;
      $('#carousel').scrollTo(elements[i], {duration: scrollAnim});
    }, sliderInter);
  }

});
