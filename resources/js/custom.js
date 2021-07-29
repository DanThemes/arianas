function setCookie(cname, cvalue, exp) {
    var d = new Date();
    d.setTime(d.getTime() + (exp * 10 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires + ';path=/';
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
	var c = ca[i];
	while (c.charAt(0) == ' ')
	    c = c.substring(1);
	if (c.indexOf(name) == 0)
	    return c.substring(name.length, c.length);
    }
    return "";
}

function inputCounter() {
    $('body').on('click', '.input-counter .minus-btn, .input-counter .plus-btn', function (e) {
	var $input = $(this).parent().find('input');
	var count = parseInt($input.val(), 10) + parseInt(e.currentTarget.className === 'plus-btn' ? 1 : -1, 10);

	$input.val(count).change();
    });
    $('body').on('change', ".input-counter input", function () {
	var _ = $(this);
	var min = 1;
	var val = parseInt(_.val(), 10);
	var max = parseInt(_.attr('size'), 10);
	val = Math.min(val, max);
	val = Math.max(val, min);

	_.val(val);
    })
	    .on("keypress", ".input-counter input", function (e) {
		if (e.keyCode === 13) {
		    e.preventDefault();
		}
	    });
}
;

$(document).ready(function () {

    /**sticky menu**/
    var header = $('#navbar');
    var headerSticky = false;
    $(window).scroll(function () {
	if (this.scrollY > 0) {
	    if (!headerSticky) {
		header.addClass('sticky-menu');
		headerSticky = true;
	    }
	} else {
	    if (headerSticky) {
		header.removeClass('sticky-menu');
		headerSticky = false;
	    }
	}
    });

    $('.new-products-carousel').owlCarousel({
	loop: true,
	margin: 20,
	transitionStyle: "fade",
	items: 1,
	dots: true,
	nav: false,
	autoplay: true,
	autoplayTimeout: 3000,
	smartSpeed: 2500,
	navClass: [
	    'owl-prev',
	    ' owl-next',
	],
	navText: [
	    '<span class="icon icon-angle-left"></span>',
	    '<span class="icon icon-angle-right" ></span>',
	],

	responsive: {
	    0: {
		items: 2,
		nav: false,
		dots: true,
	    },
	    600: {
		dots: true,
		nav: false,
		items: 2,
	    },
	    
	    1000: {
		dots: true,
		nav: false,
		items: 3,
	    },

	    1400: {
		dots: false,
		nav: true,
		items: 3,
	    },

	    1600: {
		dots: false,
		nav: true,
		items: 3,
	    }
	}
    });
    
    
    //about carousel
    
    var carouselStyle = function (event) {
	$(this).find('.owl-item')
		.removeClass('iterator-2 iterator-1 iterator1 iterator2');

	[-2, -1, 1, 2].forEach(function (value) {
	    $(this)
		    .find('.owl-item')
		    .eq(event.item.index + value)
		    .addClass('iterator' + value);
	}.bind(this));
    };


    $('.about-carousel').on('initialized.owl.carousel', carouselStyle);


    $('.about-carousel').owlCarousel({
	loop: true,
	margin: 0,
	transitionStyle: "fade",
	center: true,
	navClass: [
	    'owl-prev',
	    'owl-next',
	],

	navText: [
	     '<span class="icon icon-angle-left"></span>',
	     '<span class="icon icon-angle-right"></span>',
	],

	responsive: {
	    0: {
		items: 1,
		nav: false,
		dots: true,
	    },
	    600: {
		items: 3,
		nav: false,
		dots: true,
	    },
	    1200: {
		items: 5,
		nav: true,
		dots: false,
		mouseDrag: false,
		touchDrag: false,
	    }
	}

    });


    $('.about-carousel').on('changed.owl.carousel', carouselStyle);

    //    product-gallery

    var photos = $('#mainPhotos').owlCarousel({

	loop: false,
	margin: 10,
	nav: false,
	items: 1,
//	animateIn: 'fadeIn', // add this
//	animateOut: 'fadeOut', // and this
//	singleItem: true,
	transitionStyle: "fade",

    });

    var photoThumbs = $('#product-photos').owlCarousel({

	loop: true,
	margin: 20,
	lazyLoad: true,
	responsiveClass: true,
	navClass: [
	    'owl-prev d-flex mx-auto text-center anim',
	    ' owl-next d-flex mx-auto text-center anim',
	],
	navText: [
	    '<span class="icon icon-angle-left"></span>',
	    '<span class="icon icon-angle-right"></span>',
	],
	responsive: {
	    0: {
		items: 3,
		nav: false,
		loop: false,
		dots: true
	    },
	    400: {
		items: 3,
		nav: false,
		loop: false,
		dots: true

	    },
	    600: {
		items: 5,
		nav: false,
		loop: false,
		dots: true
	    },
	    1020: {
		items: 5,
		nav: true,
		loop: false,
		dots: false
	    },

	    1200: {
		items: 4,
		nav: true,
		loop: false,
		dots: false
	    }
	}

    });


    var currentClassName = 'current';

    // first things first, we link the photo slider with thumbs.
    var changePhotoThumb = function (e) {
	e && e.preventDefault();
	var index = e ? e.item.index : 0;

	// the thing is that the position doesnt reffer to item position but ot the slide position, 
	// you have to take into consideration the total numer of visible items.
	photoThumbs.trigger('to.owl.carousel', Math.floor((index + 1) / photoThumbs.find('.owl-item.active').length));
	photoThumbs.find('.owl-item').removeClass(currentClassName).eq(index).addClass(currentClassName);
    }

    photos.on('changed.owl.carousel', changePhotoThumb);

    changePhotoThumb();

    // now link the thumbs with main photo slider
    photoThumbs.on('click', '.owl-item', function (e) {
	e.preventDefault();
	photos.trigger('to.owl.carousel', $(this).index());
    });



    $('.swipebox').length &&
	    $('.swipebox').swipebox({
	hideBarsDelay: 0
    });


    $('body')
	    .on('click touchend', '#swipebox-overlay', function (e) {
		e.target.id === this.id && $('#swipebox-close').trigger('click');
	    });


    /**  search-trigger **/
    $('.search-trigger').click(function (e) {
	e.preventDefault();
	$('.search-wrapper').slideToggle();
    });

    /**  cart-trigger **/
    $('.cart-trigger').click(function (e) {
	e.preventDefault();
	$('.cart').slideToggle();
    });



    /** GDPR **/

    if (!getCookie('cookie_notice')) {
	$('#cookie-notice').slideDown();
    }

    inputCounter();


    $(function () {
	$('[data-toggle="tooltip"]').tooltip()
    })

});


