var app = {};

$(function(){
	app.smoothScroll(1000);
	app.filmHover();
	// app.changeNavColor();
	app.initFlickity();
	app.frontPageSlider();
	// app.mobileMenu();
	console.log("It's working");
	twttr.widgets.createTimeline(
	  {
	    sourceType: "profile",
	    screenName: "TwitterDev"
	  },
	  document.getElementById("container")
	);
});

app.frontPageSlider = function() {
	const imageArray = $('ul.slideshow li span');
	const imageUrlArray = [];
	imageArray.each(function(i){
		const url = $( this ).text();
		imageUrlArray.push(url);
	});
	//console.log(imageUrlArray);

}	
app.mobileMenu = function(){
	$('nav.nav-home').on('click', function(){
		console.log('clicked');
		$('div.menu-svg').toggleClass('vertical');
		$('div.menu-main').toggleClass('show');
	});
}
// function smoothScroll(duration){
//   $('ul#menu-main-menu a[href^="#"]').on('click', function(event) {
//     var target = $( $(this).attr('href') );
//     console.log(target);
//     //smoothscroll!!! the shortest version I have ever seen, why did I ever download it!!! ridonc.
//           event.preventDefault();
//           $('html, body').animate({
//               scrollTop: target.offset().top
//           }, duration);
//     });
// }
app.smoothScroll = function(duration){
	//console.log("oh hello");
	 $('ul#menu-main a[href^="#"]').on('click', function(event) {
   	var target = $( $(this).attr('href') );
   //	var target = $( this );
  //  console.log(target);
    //smoothscroll!!! the shortest version I have ever seen, why did I ever download it!!! ridonc.
          event.preventDefault();
          $('html, body').animate({
              scrollTop: target.offset().top
          }, duration);
    });
	// // Select all links with hashes
	// $('a[href*="#"]')
	//   // Remove links that don't actually link to anything
	//   .not('[href="#"]')
	//   .not('[href="#0"]')
	//   .click(function(event) {
	//     // On-page links
	//     if (
	//       location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	//       && 
	//       location.hostname == this.hostname
	//     ) {
	//       // Figure out element to scroll to
	//       var target = $(this.hash);
	//       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	//       // Does a scroll target exist?
	//       if (target.length) {
	//         // Only prevent default if animation is actually gonna happen
	//         event.preventDefault();
	//         $('html, body').animate({
	//           scrollTop: target.offset().top
	//         }, 1000, function() {
	//           // Callback after animation
	//           // Must change focus!
	//           var $target = $(target);
	//           $target.focus();
	//           if ($target.is(":focus")) { // Checking if the target was focused
	//             return false;
	//           } else {
	//             $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	//             $target.focus(); // Set focus again
	//           };
	//         });
	//       }
	//     }
 //  });
 }

app.filmHover = function(){
	$('.film').mouseenter(function(){
		$(this).find('.overlay').addClass('show');
	});
	$('.film').mouseleave(function(){
		$(this).find('.overlay').removeClass('show');
	});
	
}
app.initFlickity = function(){
	$('.main-carousel').flickity({
	  // options
	  cellAlign: 'left',
	  imagesLoaded: true,
	  wrapAround: true,
	  setGallerySize: false
	});
}


app.changeNavColor = function(){


	var endOfMainImage = $('.cb-slideshow li span').height();
	var navHeight = $('nav.change-scroll').height();
	endOfMainImage = endOfMainImage - navHeight;
	window.addEventListener('scroll', function(e) {
 		scroll_position = window.scrollY;
 		//console.log(scroll_position);
 		if(scroll_position > endOfMainImage){
 		//	console.log('go to grey')
 			$("nav.change-scroll").addClass('grey');
 		} else {
 		//	console.log('back to white')
 			$("nav.change-scroll").removeClass('grey');

 		}
	});
}