/* Header */
function toggleHeader() {
  var element = document.getElementById("js-header");
  element.classList.toggle("is-open");
}
function hideHeader(){
	var element = document.getElementById("js-header");
	element.classList.remove("is-open");
}
/* End of header */


/*Animate on scroll --> horizontal scrollpage*/
window.addEventListener("scroll", function() {
  const animatedHero = document.querySelector('#animatedhero') ;
  const animatedContent = document.querySelector('.horizontal-scroll-inner');
  const pageTitle = document.querySelector('.header__pagetitle');
  if(animatedHero){
    if (window.pageXOffset > 0 && animatedHero) {
      animatedHero.classList.add("scrolled");
      animatedContent.classList.add('scrolled-inner');
    } else {
      animatedHero.classList.remove("scrolled");
      animatedContent.classList.remove('scrolled-inner');
    }
  }

  if(pageTitle){
    if (window.pageYOffset > 300 || window.pageXOffset > 300) {
      pageTitle.classList.add("scrolled-pagetitle");
    } else {
      pageTitle.classList.remove("scrolled-pagetitle");
    }
  }
 
  });
  
/* Horizontal scroll */
const mouseWheel = document.querySelector('.box-scroll');

mouseWheel.addEventListener('wheel', function(e) {
    const race = 15; // How many pixels to scroll

    if (e.deltaY > 0) // Scroll right
        mouseWheel.scrollLeft += race;
    else // Scroll left
        mouseWheel.scrollLeft -= race;
		e.preventDefault();
});


 


 


