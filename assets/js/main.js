// $(function() {

// 	// Cache the Window object
// 	var $window = $(window);

// 	// Parallax Backgrounds
// 	// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641

// 	$('section[data-type="background"]').each(function(){
// 		var $bgobj = $(this); // assigning the object

// 		$(window).scroll(function() {

// 			// Scroll the background at var speed
// 			// the yPos is a negative value because we're scrolling it UP!
// 			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

// 			// Put together our final background position
// 			var coords = '50% '+ yPos + 'px';

// 			// Move the background
// 			$bgobj.css({ backgroundPosition: coords });

// 		}); // end window scroll
// 	});

// });
// const hamburger=document.querySelector(".hamburger");
// const navlink=document.querySelector(".nav-link-top");
// const links=document.querySelectorAll(".nav-link-top li");
// hamburger.addEventListener("click",()=>
// {
// navlink.classList.toggle("open");
// links.forEach(link => {
// link.classList.toggle("fade");
// });

// });

// var burgerBtn = document.getElementById('burgerBtn');
// var mobile = document.getElementById('mobile');


// burgerBtn.addEventListener('click', function() {
//     mobile.classList.toggle('navigation');
//   }, false);

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    var site_header=document.querySelector(".body");
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    site_header.classList.add("fixPosition");
      document.querySelector(".logoImg").src="assets/img/logoscroll.png";
    // document.getElementById("navbar").style.padding = "30px 10px";
    // document.getElementById("logo").style.fontSize = "25px";
  } else {
    
    document.querySelector(".logoImg").src="assets/img/logo@2x.png";
    site_header.classList.remove("fixPosition");
    // document.getElementById("logo").style.fontSize = "35px";
  }
}