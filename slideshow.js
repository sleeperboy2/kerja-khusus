var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

window.addEventListener('DOMContentLoaded', () => {
    const scroll = ScrollReveal({
      distance: '30px',
      duration: 1800,
      reset: true
    });

    // Corrected class name to '.persembahan'
    scroll.reveal('.persembahan', {
      origin: 'bottom',
      interval: 100
    });
  });