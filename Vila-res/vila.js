const observer = new IntersectionObserver((entries) =>{
  entries.forEach((entry) => {
    console.log(entry)
    if (entry.isIntersecting) {
        entry.target.classList.add('SEcol')
    }
    else {
      entry.target.classList.remove('SEcol');
    }
  });
}); 

const hiddenElements = document.querySelectorAll('.col')
hiddenElements.forEach((el) => observer.observe(el))