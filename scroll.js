
  window.addEventListener('DOMContentLoaded', () => {
    const scroll = ScrollReveal({
      distance: '30px',
      duration: 1800,
      reset: true
    });

    scroll.reveal('.card', {
      origin: 'bottom',
      interval: 100
    });

    scroll.reveal('.w3-col', {
      origin: 'left',
      interval: 100
    });

    scroll.reveal('.w3-image', {
      origin: 'bottom',
      interval: 100
    });

    scroll.reveal('.info', {
      origin: 'bottom',
      interval: 100
    });
  });

