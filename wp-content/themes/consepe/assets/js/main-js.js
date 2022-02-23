jQuery(document).ready(function($) {
	var windowWidth = window.innerWidth;

	// Menu fixo 
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 300) {
	    	$("#menu").addClass("menu-fixo");
	    } else {
	    	$("#menu").removeClass("menu-fixo");
	    }  
	});
	//---------------------------------------

	// Banners Swiper
		var swiper = new Swiper('.banner-principal', {
			speed: 1000,
			parallax: true,
			loop: true,
			spaceBetween: 5,
			effect: 'fade',
		 	pagination: {
		        el: '.swiper-pagination',
		        clickable: true,
	      	},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			autoplay: {
				delay: 5000,
			},
		});
});