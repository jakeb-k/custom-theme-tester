jQuery(document).ready(function($) {
    var header = $('.header'); // Replace '.header' with your header's class or ID.
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 30) { // Set the scroll trigger distance here.
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    });
});

//bounding box for about sec
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

//scroll to about section
function handleScroll() {
    var elements = document.querySelectorAll('.about-container');
    elements.forEach(function(element) {
        if (isElementInViewport(element)) {
            element.classList.add('in-view');
        }
    });
}

//event listeners for all the funcs
window.addEventListener('scroll', handleScroll);
window.addEventListener('resize', handleScroll);
handleScroll(); // Call this initially to check on page load

//fade slideshow 1
jQuery(document).ready(function($){
    let currentSlide = 0;
    const slides = $('.slide');
    const totalSlides = slides.length;

    // Set the first slide to be active initially
    slides.eq(currentSlide).addClass('active');

    const changeSlide = function() {
        // Remove active class from the current slide
        slides.eq(currentSlide).removeClass('active');

        // Move to the next slide, or loop back to the first if at the end
        currentSlide = (currentSlide + 1) % totalSlides;

        // Add active class to the new current slide
        slides.eq(currentSlide).addClass('active');
    };

    // Change slide every 3 seconds
    setInterval(changeSlide, 3000);
});

//fade slideshow 2
jQuery(document).ready(function($){
    let currentSlide2 = 0;
    const slides2 = $('.slide2');
    const totalSlides2 = slides2.length;

    // Set the first slide to be active initially
    slides2.eq(currentSlide2).addClass('active');

    const changeSlide = function() {
        // Remove active class from the current slide
        slides2.eq(currentSlide2).removeClass('active');

        // Move to the next slide, or loop back to the first if at the end
        currentSlide2 = (currentSlide2 + 1) % totalSlides2;

        // Add active class to the new current slide
        slides2.eq(currentSlide2).addClass('active');
    };

    // Change slide every 3 seconds
    setInterval(changeSlide, 3000);
});


//testimonial fly in animation controller

jQuery(document).ready(function($) {
    var $postBoxes = $('.postBox');
    
    $postBoxes.each(function(index, element) {
        var $element = $(element);
        
        setTimeout(function() {
            $element.addClass('animate');
        }, index * 500); // Adjust the delay time (in milliseconds) as needed
    });
});


document.addEventListener('DOMContentLoaded', function() {
    var scrollButton = document.querySelector('.slideBtn2');
    var contactForm = document.querySelector('#contact'); // Replace with the actual ID of your contact form
    
    if (scrollButton && contactForm) {
        scrollButton.addEventListener('click', function(e) {
            e.preventDefault();
            
            var targetOffset = contactForm.getBoundingClientRect().top + window.scrollY - 200;
            
            window.scrollTo({
                top: targetOffset,
                behavior: 'smooth' // Smooth scroll animation
            });
        });
    }
});