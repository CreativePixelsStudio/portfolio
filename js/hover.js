/* Image reveal on hover */

const items = document.querySelectorAll('.item');
const image = document.querySelector('.hobby img');
image.style.opacity="0";

items.forEach((el) => {
  el.addEventListener('mouseover', (e) => {
    imageData = e.target.getAttribute('data-image')
    e.target.style.zIndex = 99
    image.setAttribute('src', imageData)
  })
  el.addEventListener('mousemove', (e) => {
    image.style.top =  e.clientY + 'px'
    image.style.left =  e.clientX + 'px'
    image.style.opacity="1";

  })
  el.addEventListener('mouseleave', (e) => {
    e.target.style.zIndex = 1
    image.setAttribute('src', '')
    image.style.opacity="0";
  })
})

