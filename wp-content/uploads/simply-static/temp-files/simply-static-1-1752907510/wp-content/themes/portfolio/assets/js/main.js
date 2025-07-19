document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
      once: true, // only animate once
      duration: 600,
      easing: 'ease-in-out',
    });
  });

  document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.container');
  
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          entry.target.style.opacity = 1;
          entry.target.style.animationPlayState = 'running';
          obs.unobserve(entry.target); // Animate once
        }
      });
    }, { threshold: 0.1 });
  
    animatedElements.forEach(el => {
      el.style.animationPlayState = 'paused'; // Start paused
      observer.observe(el);
    });
  });
  
  