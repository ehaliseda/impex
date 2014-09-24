// TABLE OF CONTENTS

// 1. CODE INITS
//     - parallax effect
// 2.PLUG INS
//     - click to show with css anim with sister binding
//     - click to change background with if binding
//     - click to remove img and add contact form
//     - make banner height of window
//     - edit things on mobiles
//     - get IP adress location 
//     - get dates and show if they are open
//     - scroll smoothly to div
//     - animate icons when clicked




///////////CODE INITS

//Parallax Effect

        // (function($) {
        //     $('.background').each(function(){
        //         $(this).parallax('50%', 0.5, true);
        //     })
        // }(jQuery));



////////// PLUG INS


// Click to show with css anim with sister binding

// serviceSlider ('slider element' , 'buttons element');

var serviceSlider = function(slidersElem,buttonsElem){
     // vars
    var sliders = $(slidersElem).hide();
    var slidersOrder = sliders.each(function(i){
                                    var i = i - 1;
                                    $(this).addClass("slider"+(i+1));
                                });

    $(buttonsElem).on('click',function(){
        var currentBtn = $(this).index()-3;
        var currentSlider = $(".slider"+currentBtn);
        // toggle the slider btns
        $(this)
            .addClass('service-button-active')
            .siblings().removeClass('service-button-active');

        // hide all sliders
        sliders.hide();

        // show slider and scroll to it
        currentSlider
            .show()
            .addClass('pt-page-moveFromLeftFade')
            .delay(900);
        $('body')
            .scrollTo(currentSlider,{duration:'slow', offsetTop : '50'});
            event.preventDefault();

    }); // end .on

}; // end serviceSlider


////////////////////////////////////////////////////////////////////////////////////


// Click to change background with if binding

var headerBkgd = function(){
    var button = $('.pt-indicators li');
    var btnOrder = button.each(function(i){
                                    var i = i - 1;
                                    $(this).addClass("headerBkgdBtn"+(i+1));
                                });

    $(button).on('click', function(){

        if ($(this).hasClass('headerBkgdBtn0')) {
            $('section.header-17-sub').css('background-color', '#3E6BE1');
        } else if ($(this).hasClass('headerBkgdBtn1')) {
            $('section.header-17-sub').css('background-color', '#d15b05');
        } else if ($(this).hasClass('headerBkgdBtn2')) {
            $('section.header-17-sub').css('background-color', '#00b877');
        } 

    }); // end .on click

}; // end header background


////////////////////////////////////////////////////////////////////////////////////


// Click to remove img and add contact form
// imgToForm();

var imgToForm = function(){

    var imgBtn = $('section.content-25 a:nth-child(odd)').hide(),
          formBtn = $('section.content-25 a:nth-child(even)'),
          form = $('section.content-25 form').hide();

    formBtn.on('click', function(){
        form.fadeIn();
        formBtn.fadeOut(function(){
            imgBtn.fadeIn();
        });
    });

    imgBtn.on('click', function(){
        form.fadeOut();
        imgBtn.fadeOut(function(){
            formBtn.fadeIn();
        });
    });
   

}; // end imgToForm


////////////////////////////////////////////////////////////////////////////////////


// Banner is height of window

var fullBanner = function(element , offset , minHeight){
    var height = $(window).height();

    if (height > minHeight) {
        $(element).css('height' , height - offset);
    } else {
        // do nothing
    }
}; // end fullBanner


////////////////////////////////////////////////////////////////////////////////////


// Edit things on mobiles
// mobile(); 
//has class "mobile" and "notMobile"

    var mobile = function (){

        var mobile = $(document).find('.mobile'),
              notMobile = $(document).find('.notMobile');

        if ( isMobile.any() ) {
            notMobile.hide();
            mobile.show();
        } else {
            notMobile.show();
            mobile.hide();
        };
    } // end mobile function
    
        
////////////////////////////////////////////////////////////////////////////////////

// Get IP adress location 
// ipLocation();

var ipLocation = function ( basic , nonbasic ) {

    $.get("http://ipinfo.io", function( response ) {
                if ( response.country == 'US' ) {
                    var pathname = window.location.pathname;
                    // if you load pathaname then do nothing else go to link 'basic'
                    if ( pathname == basic ) {
                        return
                    };
                    window.location.replace( basic );
                } else {
                    window.location.replace( nonbasic );
                }
            }, " jsonp ");
}; // end ipLocation


////////////////////////////////////////////////////////////////////////////////////

// Get Dates and show if they are open
// dates();


var dates = function(open,close){
    var currentTime = new Date(),
          hours = currentTime.getHours(),
          minutes = currentTime.getMinutes();

    // checks if time is between open and close
    if ( hours > open && hours < close ) { // yes open

        $('#date').text("We are open right now, give us a call.").addClass("open");

    } else { // closed

        $('#date').text("Sorry, we are closed. Leave us and e-mail and we will get back to you soon.").addClass("closed");

    }

}; // end dates


////////////////////////////////////////////////////////////////////////////////////

// Scroll smoothly to div
// smoothScroll();
// href needs to match the id of the div so it could work
// http://lions-mark.com/jquery/scrollTo/

var smoothScroll = function(element){
    $(element).click(function(e){
        var $this = $(this),
              href = $this.attr('href');
        $('body').scrollTo(href,{duration:'slow', offsetTop : '50'});
        e.preventDefault();
    });
}; // end smoothScroll


////////////////////////////////////////////////////////////////////////////////////

// Animate icons when clicked
// animLogo

var animLogo = function(element){
    $(element).click(function(e){
        $(this).addClass('animation-target');
        e.preventDefault();
        })
}; // end animLogo

////////////////////////////////////////////////////////////////////////////////////

// bootsnipp slider for organiza T
// http://bootsnipp.com/snippets/featured/tabbed-slider-carousel

        (function() {
                $('#myCarousel').carousel({
                    interval:   2000
                });
                
                var clickEvent = false;
                $('#myCarousel').on('click', '.nav a', function() {
                        clickEvent = true;
                        $('.nav li').removeClass('active');
                        $(this).parent().addClass('active');        
                }).on('slid.bs.carousel', function(e) {
                    if(!clickEvent) {
                        var count = $('.nav').children().length -1;
                        var current = $('.nav li.active');
                        current.removeClass('active').next().addClass('active');
                        var id = parseInt(current.data('slide-to'));
                        if(count == id) {
                            $('.nav li').first().addClass('active');    
                        }
                    }
                    clickEvent = false;
                });
             })();















// temporary js


(function() {
    $('.scroll-arrow').click(function(e){
        $('body').scrollTo('#servicios',{duration:'slow', offsetTop : '50'});
        e.preventDefault();
    });
})();