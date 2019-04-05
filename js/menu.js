const burger = document.querySelector('.burger--container')

burger.addEventListener('click', e => {
  burger.classList.toggle('is-expanded')
})