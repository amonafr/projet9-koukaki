const observer = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        entry.target.classList.add('animation-titre-scroll');
      } else {
        entry.target.classList.remove('animation-titre-scroll');
      }
    });
  });
  console.log("Le script a été chargé");
  observer.observe(document.querySelector('.story h2 .titre'));
  observer.observe(document.querySelector('#studio h2 .titre'));
  observer.observe(document.querySelector('#characters > div:nth-child(1) > h3 > span'));
  observer.observe(document.querySelector('#place > div > h3 > span'));

