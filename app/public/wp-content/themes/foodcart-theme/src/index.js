// VARIABLES / CONSTANTS

//variables for nav toggling
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('#menu-main-header-menu');

//variables for carousel
const carouselBtns = document.querySelectorAll("[data-carousel-btn]");

//variables for accordion
const accordionBtns = document.querySelectorAll('.accordion-item-header');


// FUNCTIONS / EVENT LISTENERS

// nav toggling
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');    
    navMenu.classList.toggle('active');    

})

document.querySelectorAll('#menu-main-header-menu li a').forEach(n => 
    n.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
    }))

// carousel

carouselBtns.forEach(btn => 
    btn.addEventListener('click', () => {
        const offset = btn.dataset.carouselButton === 'next' ? 1 : -1;
        const slides = btn
            .closest("[data-carousel]")
            .querySelector("[data-slides]");
        
        const activeSlides = slides.querySelector("[data-active]");
        let newIndex = [...slides.children].indexOf(activeSlides) + offset;

        if (newIndex < 0) newIndex = slides.children.length -1;
        if (newIndex >= slides.children.length) newIndex = 0;

        slides.children[newIndex].dataset.active = true;
        delete activeSlides.dataset.active;
    }))

// accordion

accordionBtns.forEach(accordionBtn => {
    accordionBtn.addEventListener('click', () => {

        //toggles the active class on the accordion header
        //when the header is clicked
        accordionBtn.classList.toggle('active');

        // targets the accordion's content (the grid elements)
        //to check if there is a class of active on its sibling
        //then changse the max height if this is true
        const accordionItemBody = accordionBtn.nextElementSibling;

        if(accordionBtn.classList.contains('active')) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight +'px'
        } else {
            accordionItemBody.style.maxHeight = 0;
        }
    })
})