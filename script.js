function scroll(selector, options = {}){
  let els = document.querySelectorAll(selector)
  els = Array.from(els)
  els.forEach(el => {
    addObserver(el, options)
  })
}

function addObserver(el, options){
  if(!('IntersectionObserver' in window)){
    if(options.cb){
      options.cb(el)
    }else{
      entry.target.classList.add('active')
    }
    return
  }
  let observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        if(options.cb){
          options.cb(el)
        }else{
          entry.target.classList.add('anim-goup')
        }
        observer.unobserve(entry.target)
      }
    })
  }, options)
  observer.observe(el)
}

scroll('#gallery', {
  rootMargin: '-30px',
})

scroll('#blog', {
  rootMargin: '-60px',
})