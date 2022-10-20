//  Authors: Quyhn Ly Do
//           Marcelo Di Liscia
//           Xuan Wang
//           Vivien Yep
//  Date:    3-Apr-2022

window.addEventListener("load", startup, false);

var timeoutHandle = -1;
var imageTimoutHandle = -1;
// scroll to top
var scrollToTop = document.getElementById("scroll-top");
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50){
            $('#scroll-top').fadeIn();
        }
        else {
            $('#scroll-top').fadeOut();
        }
    });
    $('#scroll-top').click(function(){
        $('body, html').animate({
            scrollTop: 0
        }, 200);
        return false;
    });
});

/* ***** Carousel ***** */
// Slide number
var slideNumber = 0;
// array of multiple slides
var slides = document.getElementsByClassName("slides");
// array of multiple dots
var dots = document.getElementsByClassName("dot");


/**
 * Load these functions at startup
 */
function startup(){
    
    // carousel 
    showSlide(slideNumber);
    
}

// Scroll to top button
function goToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

/* ********** Carousel ********** */

/**
 * Function: Go to next slide in carousel when clicking on right arrow
 */
function nextSlide() {
    if (timeoutHandle != -1)
    {
        clearTimeout(timeoutHandle);
    }

    showSlide(slideNumber);
}

/**
 * Function: Go to previous slide in carousel when clicking on left arrow
 */ 
  
function previousSlide() {
    if (timeoutHandle != -1)
    {
        clearTimeout(timeoutHandle);
    }

    //alert('before ' + slideNumber);
    if (slideNumber == 0) {
        slideNumber = slides.length - 2;
    }
    else if (slideNumber == 1) {
        slideNumber = slides.length - 1;
    }
    else {
        slideNumber -= 2;
    }
    //alert('after ' + slideNumber);
    showSlide(slideNumber);
}


/**
 * Function: Show slide with slide number
 * @param {*} slideNb 
 */
function showSlide(slideNb) {
    if (timeoutHandle != -1)
    {
        clearTimeout(timeoutHandle);
    }

    slideNumber = slideNb;

    // to hide the inactive slides & change buttons look
    for (let i = 0; i < slides.length; i++)
    {
       slides[i].style.display = "none";
       dots[i].className = "dot"
    }

    slides[slideNb].style.display = "block";
    dots[slideNb].className = "dot active-slide";

    if(slideNumber <= slides.length - 2){
        slideNumber++;
    }
    else {
        slideNumber = 0;
    }

    timeoutHandle = setTimeout(function(){showSlide(slideNumber);}, 3000);
}


/*** validates email data entry in modal */
function validateEmail() {
    // declare variables
    let selectedEmail = document.getElementById('email');

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    // validate email format
    if (!selectedEmail.value.match(mailformat))
    {
        window.alert('You must write a valid email (use "@" and ".")');
        selectedEmail.focus();
        return false;
    } else {
        return true;
    }
}

/*** multiplies quantity by price  */
