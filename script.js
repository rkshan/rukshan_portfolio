document.addEventListener('DOMContentLoaded', function () {
   
    function handleIntersection(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate'); 
          observer.unobserve(entry.target); 
        }
      });
    }
  
  
    const observer = new IntersectionObserver(handleIntersection, { threshold: 0.5 });
  
  
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
  
    
    animatedElements.forEach(element => {
      observer.observe(element);
    });
  });
  