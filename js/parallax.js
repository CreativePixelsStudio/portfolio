/* Paralax */

window.addEventListener("scroll", function() {

    const distance = window.scrollY;
    const distanceX = window.scrollX;
    const parallaxZoom =  document.querySelectorAll(".parallax-zoom");
    const parallaxZoomOut =  document.querySelector(".parallax-zoom-out");
    const parallaxRight = document.querySelector(".parallax-right");
    const parallaxZoomX = document.querySelector(".parallax-zoomX");
    const parallaxZoomXOut = document.querySelectorAll(".parallax-zoomX-out");
    const parallaxRightX = document.querySelector(".parallax-rightX");
    const parallaxTop = document.querySelector(".parallax-top");
    const parallaxBottom = document.querySelector(".parallax-bottom");
    const parallaxBGTop = document.querySelector(".parallax-bg-top");
    const parallaxBGZoom = document.querySelector(".parallax-bg-zoom");
    const parallaXLeftX = document.querySelectorAll(".parallax-leftX");

    /* To right*/
    if(parallaxRight){
        document.querySelector(".parallax-right").style.transform = `translateX(${distance * 0.1}px)`;
    }

     /* To right - scroll horizontal */
     if(parallaxRightX){
        console.log('test');

        document.querySelector(".parallax-rightX").style.transform = `translateX(+${distanceX * 0.1}px)`;
    }

    /* To top*/
    if(parallaxTop){
        document.querySelector(".parallax-top").style.transform = `translatey(-${distance * 0.05}px)`;
    }

    /* To top background-image*/
    if(parallaxBGTop){
        document.querySelector(".parallax-bg-top").style.backgroundPosition = `center calc(50% + ${distance * 0.2}px)`;
    }

     /* Zoom background-image*/
     if(parallaxBGZoom){
        document.querySelector(".parallax-bg-zoom").style.backgroundSize = `auto calc(100% + ${distanceX * 0.1}px)`;
    }
    

     /* To bottom*/
     if(parallaxBottom){
        document.querySelector(".parallax-bottom").style.transform = `translatey(${distance * 0.08}px)`;
    }

    /* Zoom in */
    if(parallaxZoom){
        let parallaxZoom = document.querySelectorAll(".parallax-zoom");
        let parallaxZoomArray = Array.from(parallaxZoom);
        parallaxZoomArray.forEach((el) => el.style.backgroundSize = `auto calc(100% + ${distance * 0.1}px) `);
    }

    /* zoom in - scroll horizontal */
    if(parallaxZoomX){
        let parallaxZoomX = document.querySelectorAll(".parallax-zoomX");
        let parallaxZoomXArray = Array.from(parallaxZoomX);
        parallaxZoomXArray.forEach((el) => el.style.height = `calc(100% - ${distanceX * 0.03}px)`);
    }

    /* zoom out */
    if(parallaxZoomOut){
        document.querySelector(".parallax-zoom-out").style.backgroundSize = `auto calc(150% - ${distance * 0.1}px)`;
    }

    /* zoom out - scroll horizontal */
    if(parallaxZoomXOut){
        let parallaxZoomXOut = document.querySelectorAll(".parallax-zoomX-out");
        let parallaxZoomXOutArray = Array.from(parallaxZoomXOut);
        parallaxZoomXOutArray.forEach((el) => el.style.width = `calc(100% - ${distanceX * 0.1}px)`);
    }

    /* To left - scroll horizontal */
    if(parallaXLeftX){
        let parallaxLeftX = document.querySelectorAll(".parallax-leftX");
        let parallaxLeftXArray = Array.from(parallaxLeftX);
        parallaxLeftXArray.forEach((el) => el.style.transform = `translateX(-${distanceX * 0.15}px)`);
    }
 
  });

  