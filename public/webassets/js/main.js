/*
Template Name: La Paska
Author: Ingrid Kuhn
Author URI: themeforest/user/ingridk
Version: 1.0
*/

//------- Document ready function -------//

$(document).ready(function () {
   "use strict";


	   //active link on navbar

		var links = $('.navbar ul li a');
		$.each(links, function (key, va) {
			if (va.href == document.URL) {
				$(this).addClass('active');
			}
		});
		$('.active').closest('li.dropdown').addClass('active');

	   // Slick sliders

	   $('.slider-3').slick({
		  infinite: true,
		  arrows: true,
		  dots: true,
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  responsive: [{
				breakpoint: 900,
				settings: {
				   slidesToShow: 2,
				   slidesToScroll: 2
				}
			 },
			 {
				breakpoint: 700,
				settings: {
				   slidesToShow: 1,
				   slidesToScroll: 1
				}
			 }
		  ]
	   });

	   $('.slider-1').slick({
		  infinite: true,
		  arrows: true,
		  dots: true,
		  slidesToShow: 1,
		  slidesToScroll: 1
	   });

	   $('.slider-center').slick({
		  centerMode: true,
		  centerPadding: '160px',
		  slidesToShow: 3,
		  dots: true,
		  arrows: true,
		  responsive: [{
				breakpoint: 768,
				settings: {
				   centerMode: true,
				   centerPadding: '40px',
				   slidesToShow: 2
				}
			 },
			 {
				breakpoint: 480,
				settings: {
				   centerMode: true,
				   centerPadding: '40px',
				   slidesToShow: 1
				}
			 }
		  ]
	   });

	   // number counter

	   var counter = document.getElementById("counter");
	   if (counter) {
		  $(document).ready(function () {
			 checkDisplay();

			 $(window).on('resize scroll', function () {
				checkDisplay();
			 });
		  });

		  function checkDisplay() {
			 $('.counter-value').each(function () {
				var $this = $(this);
				if ($this.isOnScreen()) {
				   var countTo = $this.attr('data-count');
				   $({
					  countNum: $this.text()
				   }).animate({
					  countNum: countTo
				   }, {
					  duration: 2000,
					  easing: 'linear',
					  step: function () {
						 $this.text(Math.floor(this.countNum));
					  },
					  complete: function () {
						 $this.text(this.countNum);
					  }
				   });
				}
			 });
		  }
	   }

	   //add fixed top on scroll

	   $(function () {
		  var header = $("#template-header");
		  $(window).on('scroll', function () {
			 var scroll = $(window).scrollTop();
			 if (scroll >= 10) {
				header.addClass("fixed-top");
			 } else {
				header.removeClass("fixed-top");
			 }
		  });

	   });


	   //parallax img box

	   if (document.querySelector(".parallax-img")) {
		  gsap.to(".parallax-img", 4, {
			 backgroundPosition: "120% 100%",
			 ease: "slow",
			 scrollTrigger: {
				trigger: ".parallax-img",
				start: "top 60%",
				end: "bottom center",
				scrub: true,
			 }
		  });
	   }


	   //parallax images on about

	   if (document.querySelector(".parallax-effect")) {

		  gsap.to(".parallax2", 1, {
			 scrollTrigger: {
				trigger: ".parallax2",
				start: "top 80%",
				end: "bottom 10%",
				scrub: 5,
				toggleActions: "play none none reverse"
			 },

			 y: '-20%',
			 ease: 'slow'
		  });

		  gsap.to(".parallax1", 1, {
			 scrollTrigger: {
				trigger: ".parallax1",
				start: "top 80%",
				end: "bottom 10%",
				scrub: 5,
				toggleActions: "play none none reverse"
			 },

			 y: '20%',
			 ease: 'slow'
		  });

	   }

	   //parallax bg

	   if (document.querySelector(".parallax-bg")) {
		  gsap.to(".parallax-bg", {
			 backgroundPosition: "50% 50%",
			 ease: "slow",
			 scrollTrigger: {
				trigger: ".parallax-bg",
				start: "top bottom",
				end: "bottom top",
				scrub: true
			 }
		  });
	   }
	   //jumbotron effect on load
	   
	   if (document.querySelector(".jumbotron")) {
		  gsap.from(".jumbotron", {
			 duration: 1,
			 y: '-50%',
			 ease: 'slow',
			 opacity: 0
		  });
		  gsap.from(".jumbotron h1,.jumbotron .breadcrumb", {
			 duration: 1,
			 y: '-50%',
			 ease: 'slow',
			 delay: 0.8,
			 opacity: 0
		  });
	   }

	   // Magnific Popup

	   $('.lightbox').magnificPopup({
		  delegate: 'a', // child items selector, by clicking on it popup will open
		  type: 'image',
		  gallery: {
			 enabled: true
		  },
		  titleSrc: 'title',
		  titleSrc: function (item) {
			 return '<a href="' + item.el.attr('href') + '">' + item.el.attr('title') + '</a>';
		  }
	   });

	   // filter 

	   $(".buttons-filter button").on('click', function () {
		  // filter items
		  var value = $(this).attr('data-filter');
		  if (value == "all") {
			 $('.filter-item').show('400');
		  } else {
			 $(".filter-item").not('.' + value).hide('400');
			 $('.filter-item').filter('.' + value).show('400');
		  }
		  // add active class to buttons
		  $('.buttons-filter button.active').removeClass('active');
		  $(this).addClass('active');

	   });


}); // End doc ready

	  
//------- Window scroll function -------//

$(window).on('scroll', function () {

	   //Collapse the top bar on scroll

	   if ($("#main-nav").offset().top > 100) {
		  $('.top-bar').slideUp({
			 duration: 150,
			 easing: "easeInOutSine"
		  }).fadeOut(120);
	   } else {
		  $('.top-bar').slideDown({
			 duration: 0,
			 easing: "easeInOutSine"
		  }).fadeIn(120);
	   }


}); // end window scroll


$(window).on('load', function () {

	   // Page Preloader 	

	   $("#preloader").fadeOut("slow");


	   //Effects on scroll

	   AOS.init({
		  disable: 'mobile',
		  duration: 1500,
		  once: true
	   });
	   
}); // end window load


// Typewriter effect
	   
	   var TxtType = function (el, toRotate, period) {
		  this.toRotate = toRotate;
		  this.el = el;
		  this.loopNum = 0;
		  this.period = parseInt(period, 10) || 2000;
		  this.txt = '';
		  this.tick();
		  this.isDeleting = false;
	   };

	   TxtType.prototype.tick = function () {
		  var i = this.loopNum % this.toRotate.length;
		  var fullTxt = this.toRotate[i];

		  if (this.isDeleting) {
			 this.txt = fullTxt.substring(0, this.txt.length - 1);
		  } else {
			 this.txt = fullTxt.substring(0, this.txt.length + 1);
		  }

		  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

		  var that = this;
		  var delta = 200 - Math.random() * 100;

		  if (this.isDeleting) {
			 delta /= 2;
		  }

		  if (!this.isDeleting && this.txt === fullTxt) {
			 delta = this.period;
			 this.isDeleting = true;
		  } else if (this.isDeleting && this.txt === '') {
			 this.isDeleting = false;
			 this.loopNum++;
			 delta = 500;
		  }

		  setTimeout(function () {
			 that.tick();
		  }, delta);
	   };

	   window.onload = function () {
		  var elements = document.getElementsByClassName('typewrite');
		  for (var i = 0; i < elements.length; i++) {
			 var toRotate = elements[i].getAttribute('data-type');
			 var period = elements[i].getAttribute('data-period');
			 if (toRotate) {
				new TxtType(elements[i], JSON.parse(toRotate), period);
			 }
		  }

	   };
