;
(function($) {
    "use strict";

    $(document).ready(function() {

        /*-------------------------------
            Navbar Fix
        ------------------------------*/
        if ($(window).width() < 991) {
            navbarFix()
        }


        /*--------------------
            wow js init
        ---------------------*/
        new WOW().init();

        /*-------------------------
            magnific popup activation
        -------------------------*/
        $('.video-play,.video-popup,.small-vide-play-btn').magnificPopup({
            type: 'video'
        });

        /*------------------
            back to top
        ------------------*/
        $(document).on('click', '.back-to-top', function() {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });
        /*------------------------------
            counter section activation
        -------------------------------*/
        var counternumber = $('.count-num');
        counternumber.counterUp({
            delay: 20,
            time: 1000
        });
        /*------------------------------
            donate activation
        -------------------------------*/
        var donate_link = '';
        $(document).on('change input', '.donation_wrapper > .amount_wrapper > input', function() {
            $(this).val(parseFloat($(this).val()).toFixed(2));
            $(this).parent().parent().find('> a').attr('href', donate_link.replace('{amount}', parseFloat($(this).val()).toFixed(2)));
        });
        $(document).on('click', '.donation_wrapper > .single_amount_wrapper > .single_amount', function() {
            $('.donation_wrapper > .amount_wrapper > input').val(parseFloat($(this).attr('data-value')).toFixed(2)).trigger('change');
        });

        /*---------------------------
            Testimonial carousel
        ---------------------------*/
        $('.testimonial-carousel').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            autoplay: true,
            centerMode: true,
            speed: 1000,
            autoplaySpeed: 5000,
            // fade: true,
            prevArrow: '<span class="slick-prev"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="slick-next"><i class="fas fa-chevron-right"></i></span>',
            appendArrows: $('.banner-slider-controls .slider-nav'),
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.content-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.testimonial-carousel',
            dots: false,
            centerMode: true,
            arrows: false,
            focusOnSelect: true
        });
        /*---------------------------
            BLog Grid carousel
        ---------------------------*/
        var $TestimonialCarousel = $('.blog-grid-carousel');
        if ($TestimonialCarousel.length > 0) {
            $TestimonialCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: true,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1
                    },
                    460: {
                        items: 1
                    },
                    599: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    960: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    },
                    1920: {
                        items: 3
                    }
                }
            });
        }
        /*---------------------------
            header carousel
        ---------------------------*/
        var $headerCarousel = $('.header-slider-one');
        if ($headerCarousel.length > 0) {
            $headerCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: true,
                nav: true,
                navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    460: {
                        items: 1,
                        nav: false,
                    },
                    599: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    960: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1920: {
                        items: 1
                    }
                }
            });
        }

        /*----------------------
            Search Popup
        -----------------------*/
        var bodyOvrelay = $('#body-overlay');
        var searchPopup = $('#search-popup');

        $(document).on('click', '#body-overlay', function(e) {
            e.preventDefault();
            bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
        });
        $(document).on('click', '.border-none', function(e) {
            e.preventDefault();
            bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
        });
        $(document).on('click', '#search', function(e) {
            e.preventDefault();
            searchPopup.addClass('active');
            bodyOvrelay.addClass('active');
        });


    });


    //define variable for store last scrolltop
    var lastScrollTop = '';

    $(window).on('scroll', function() {

        //back to top show/hide
        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }

        // Sticky-Memu
        if ($(window).width() > 991) {
            StickyMenu();
        }



    });


    $(window).on('resize', function() {
        /*-------------------------------
            Navbar Fix
        ------------------------------*/
        if ($(window).width() < 991) {
            navbarFix()
        }
    });


    $(window).on('load', function() {

        /*-----------------
            preloader
        ------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(1000);

        /*-----------------
            back to top
        ------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut();

    });

    function navbarFix() {
        $(document).on('click', '.navbar-area .navbar-nav li.menu-item-has-children>a, .navbar-area .navbar-nav li.appside-megamenu>a', function(e) {
            e.preventDefault();
        })
    }

    function StickyMenu() {
        /*--------------------------
                 sticky menu activation
        ---------------------------*/
        var st = $(this).scrollTop();
        var mainMenuTop = $('.navbar-area');
        if ($(window).scrollTop() > 1000) {
            mainMenuTop.addClass('nav-fixed');
        } else {
            mainMenuTop.removeClass('nav-fixed ');
        }
        lastScrollTop = st;
    }


})(jQuery);