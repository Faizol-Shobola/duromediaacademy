$(document).ready(function () {
    
    $("h1, h2, h3, h4, h5, h6").addClass('font-head');
    $("p, a, button").addClass('font-body');
    
    var wow = new WOW(
        {
          boxClass:     'wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null,    // optional scroll container selector, otherwise use window,
          resetAnimation: true,     // reset animation on end (default is true)
        }
      );
    wow.init();


     /*----------------------------------------------------*/
    /*	Instructor Slick Carousel
    /*----------------------------------------------------*/
    let iSlide = $('.instructor-slide');
    iSlide.owlCarousel({
        items: 3,
        loop:true,
        autoplay:true,
        dots: true,
        navBy: 1,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        smartSpeed: 1000,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:1
            },
            768:{
                items:2
            },
            991:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });

     /*----------------------------------------------------*/
    /*	Testimonial Slick Carousel
    /*----------------------------------------------------*/
    let tSlide = $('.testimonial-slide');
    tSlide.owlCarousel({
        items: 1,
        loop:true,
        autoplay:true,
        dots: true,
        navBy: 1,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        smartSpeed: 1000,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:1
            },
            768:{
                items:1
            },
            991:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });


    /*----------------------------------------------------*/
    /*	project Slick Carousel
    /*----------------------------------------------------*/
    let pSlide = $('.project-slide');
    pSlide.owlCarousel({
        items: 3,
        loop:true,
        autoplay:true,
        dots: true,
        navBy: 1,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        smartSpeed: 1000,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:1
            },
            768:{
                items:2
            },
            991:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
    
});

// sociallink validation
socialLink = a => {
    let link = $(a);
    let href = link.attr('href')
    if (href == '') {
        link.addClass('hidden')
    } else {
        link.removeClass('hidden')
    }
}
let githubLink = socialLink('.github-link');
let twitterLink = socialLink('.twitter-link');
let linkedinLink = socialLink('.linkedin-link');
let instagramLink = socialLink('.instagram-link');
let facebookLink = socialLink('.facebook-link');
let projectLink = socialLink('.project-link');

//dropdown menu
let dropdown = document.querySelectorAll("ul#menu-duromedia-1 > li a");

let i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active-menu");
  let dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
  }
  else {
        dropdownContent.style.display = "block";
  }
  });
}

//navbar toggle
function openToggle() {
    const navs = document.querySelectorAll('.mobile-menu')
        
    navs.forEach(nav => nav.classList.toggle('navbar_toggleshow'));
}

document.querySelector('.open_link-toggle')
.addEventListener('click', openToggle);

//header scroll
$(window).scroll(function() {
    let sticky = $('.header'),
    
      scroll = $(window).scrollTop();
        
    if (scroll >= 200) sticky.addClass('menu-sticky');
    else sticky.removeClass('menu-sticky');
});

let btn = $('#button');
$(window).scroll(function() {
  if ($(window).scrollTop() > 100) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '100');
});

$(document).ready(function() {	

    let id = '.dialog';

    $(id).click(function () {
        $(this).remove();
        $(id).remove();
    });
    setTimeout(function(){
        $(id).remove();
    }, 20000);
});

// count Down Timer
function makeTimer() {

    //let endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
    let endTime = new Date("15 April 2021 9:56:00 GMT+01:00");			
        endTime = (Date.parse(endTime) / 1000);
    
        let now = new Date();
        now = (Date.parse(now) / 1000);
    
        let timeLeft = endTime - now;
    
        let days = Math.floor(timeLeft / 86400); 
        let hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        let minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        let seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
    
        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }
    
        $("#days").html(days + `<span class="block">Days</span>`);
        $("#hours").html(hours + `<span class="block">Hours</span>`);
        $("#minutes").html(minutes + `<span class="block">Min</span>`);
        $("#seconds").html(seconds + `<span class="block">Sec</span>`);	
        
    
    }
    
    setInterval(function() { makeTimer(); }, 1000);
