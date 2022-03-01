
document.addEventListener(
    "DOMContentLoaded", () => {
        new Mmenu("#hpm-menu", {
            wrappers: ["bootstrap"],
            "extensions": [
                "theme-dark",
                "pagedim-black"
			],
            "navbars": [
                {
                    "position": "bottom",
                    "content": [
                        '<a target=”_blank” href="https://www.facebook.com/HPM-Maroc-Horizon-Project-Management-Maroc-114855735241406/"><i class="fab fa-facebook-f" id="ic1"></i></a>',
                        '<a target=”_blank” href="https://www.linkedin.com/company/horizon-project-management---hpm-maroc"><i class="fab fa-linkedin" id="ic1"></i></a>',
                    ]
                }
            ]
        });
        const loader = $( ".cssload-loader-container" );
        setTimeout(()=>{
            loader.fadeOut('200',()=>{
              loader.remove();
            });
        },120)
    }
);

$(document).ready(function () {


	$('.carousel').carousel({
		interval: 4000,
		dots: true,
		pause: false,
		fade: true,
	});


	var swiper = new Swiper('.swiper-clients', {
		slidesPerView: 5,
		spaceBetween: 30,
		autoplay: true,
		loop: true,
		breakpoints: {
			640: {
			  slidesPerView: 1,
			  spaceBetween: 20,
			},
			768: {
			  slidesPerView: 4,
			  spaceBetween: 40,
			},
			1024: {
			  slidesPerView: 5,
			  spaceBetween: 50,
			},
		  }
	});
	/* ***************search************/

	$('#search').click(function () {

		$('.search-barre').animate({
			top: '0',
			opacity: 1,
		})
	});

	$('#times').click(function () {

		$('.search-barre').animate({
			top: '-150',
			opacity: 0,
		});
		$(".close").val("");
	});


	/*--------------------sticky nav-bar------------------------------*/

	$(window).on('scroll', function () {

		if ($(window).scrollTop()) {
			$(".hpm-navbar").addClass('navbar-fixed-bg');
		} else {
			$(".hpm-navbar").removeClass('navbar-fixed-bg');
		}

	});



// 	$(document).on('click', '.navbar-toggler', function (event) {
// 	    menu.API.open();
//         console.log(menu);
// 		$('.hpm-navbar').toggleClass('open-menu');
// 	});


    if ( $('.header-container > header.navbar-at-top').length ) {
        $('.header-container').css('height', $('.header-container > header').height() );
    }

	/*-----------------scrolling script------------------------------*/

    $(document).on('click', 'a[href^="#"]', function(event){
        event.preventDefault();
        let section = $( $.attr(this, 'href') );

        if(section.offset() === undefined){
            let parentDropdown = $(this).closest('.dropdown').find('a.dropdown-toggle');
            window.location.href = $(parentDropdown).attr('href')+$.attr(this, 'href');
        }else {
            $('html, body').animate({
    			scrollTop: $($.attr(this, 'href')).offset().top - 90
    		}, 500);
        }
    });

    if( window.location.hash ){
        $(window).scrollTop(0);
        setTimeout(()=>{
            $('html, body').animate({
    			scrollTop: $(window.location.hash).offset().top - 90
    		}, 800);
        }, 500)
    }

    if($('.dropdown').length){
        $('.dropdown').hover( function(){
            $('.dropdown-toggle').removeClass('show');
            $(this).find('.dropdown-toggle').addClass('show');
        },function(){
            $('.dropdown-toggle').removeClass('show');
        })
    }


});

