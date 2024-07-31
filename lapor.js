
window.addEventListener('DOMContentLoaded', () => {
    const scroll = ScrollReveal({
      distance: '30px',
      duration: 1500,
      reset: true
    });

    scroll.reveal('.w3-panel', {
        origin: 'bottom',
        interval: 100
      });

    scroll.reveal('.w3-container', {
        origin: 'bottom',
        interval: 100
      });
  

    scroll.reveal('.w3-row w3-container', {
      origin: 'bottom',
      interval: 100
    });

    scroll.reveal('.card', {
      origin: 'left',
      interval: 100
    });

    scroll.reveal('.w3-center w3-padding-64', {
      origin: 'bottom',
      interval: 100
    });
  });


