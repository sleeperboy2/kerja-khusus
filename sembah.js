
window.addEventListener('DOMContentLoaded', () => {
    const scroll = ScrollReveal({
      distance: '40px',
      duration: 2900,
      reset: true
    });

    // Corrected class name to '.persembahan'
    scroll.reveal('.persembahan', {
      origin: 'left',
      interval: 100000
    });
  });