/* global $, document, window */
$(document).ready(function () {

    "use strict";

    /*-------------------------------------
    Navbar Toggle for Mobile
    -------------------------------------*/

    function navbarCollapse() {
        if ($(window).width() < 992) {
            $(document).on('click', function (event) {
                var clickover = $(event.target);
                var _opened = $("#navbar-collapse").hasClass("in");
                if (_opened === true && !(clickover.is('.navbar-nav .submenu')) && !(clickover.is('.navbar-nav .submenu  > a'))) {
                    $("button.navbar-toggle").trigger('click');
                }
                if (!(clickover.is('#footer-nav .submenu')) && !(clickover.is('#footer-nav .submenu > a'))) {
                    $('#footer-nav .submenu').removeClass('submenu-open');
                }
            });

            $('.navbar-nav .submenu').unbind('click');
            $('.navbar-nav .submenu-item').css('display', 'none');
            $('.navbar-nav .submenu').on('click', function () {
                $(this).children('.submenu-item').slideToggle();
            });

            $('.navbar-nav .submenu .submenu').on('click', function (e) {
                e.stopPropagation();
            });

        } else {
            $('.navbar-nav .submenu-item').css('display', 'block');
        }
    }
    navbarCollapse();


    function footerNav() {
        if ($(window).width() < 992) {
            $('#footer-nav .submenu').unbind('click');
            $('#footer-nav .submenu').on('click', function () {
                if ($(this).hasClass('submenu-open')) {
                    $(this).removeClass('submenu-open');
                } else {
                    $(this).addClass('submenu-open');
                }
            });
            $('#footer-nav .submenu > a').on('click', function (e) {
                e.preventDefault();
            });
            $('#footer-nav .submenu .submenu').on('click', function (e) {
                e.stopPropagation();
            });
        }
    }

    footerNav();


    /*----------------------------------------
      Advance Search Option
    ---------------------------------------*/
    $('.advance-search-toggle').on('click', function(){
        $('.advance-search-options').slideToggle();
    });

    /*----------------------------------------
        Smooth scrolling
    ---------------------------------------*/
    $('.page-scroll').on('click', function (e) {
        var tujuan = $(this).attr('href');
        var elemenTujuan = $(tujuan);

        $('html, body').animate({
            scrollTop: elemenTujuan.offset().top - 30
        }, 600, 'easeInOutExpo');

        e.preventDefault();
    });


    /*----------------------------------------
      Side Map Sticky
    ---------------------------------------*/

    function sideMap() {
        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 370 && $(window).width() > 992) {
                $('.listing-side-map').addClass('fixed');
            } else {
                $('.listing-side-map').removeClass('fixed');
            }
        });
    }

    sideMap();

    /*-------------------------------------
      Navbar
    -------------------------------------*/

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('header .navbar').addClass('scroll');
        } else if ($(window).scrollTop() === 0) {
            $('header .navbar').removeClass('scroll');
        }
    });

    /*-------------------------------------
      Header Search Js  
    -------------------------------------*/

    $('.search-button a').on('click', function (e) {
        $('.header-search').slideToggle();
        $(this).find('.fa-search').removeClass('.fa-search').toggleClass('fa-times');
        e.preventDefault();
    })

    $('.search-toggle-mobile').on('click', function (e) {
        $('.header-search').slideToggle();
        $(this).find('.fa-search').removeClass('.fa-search').toggleClass('fa-times');
        e.preventDefault();
    })


    if ($(window).width() > 991) {
        $(document).on('mouseup', function (event) {
            var clickover = $(event.target);
            var _opened = $(".header-search").is(':visible');
            if (_opened === true && !(clickover.is('.header-search, .header-search *, .search-button a, .search-button a *'))) {
                $(".search-button a").trigger('click');
            }
        });
    } else {
        $(document).on('mouseup', function (event) {
            var clickover = $(event.target);
            var _opened = $(".header-search").is(':visible');
            if (_opened === true && !(clickover.is('.header-search, .header-search *, .search-toggle-mobile, .search-toggle-mobile *'))) {
                $(".search-toggle-mobile").trigger('click');
            }
        });
    }


    /*-------------------------------------
      Plyr Js  
    -------------------------------------*/

    plyr.setup();


    /*-------------------------------------
    Flickr Gallery
    -------------------------------------*/

    $("#flickr-gallery").jsFlickrGallery({
        pagination: {
            generate: false
        },
        modal: {
            generate: false
        }
    });

    /*-------------------------------------------
    Magnific PopUp
    -------------------------------------------*/

    $('.flickr-gallery').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            },
        });
    });

    /*-------------------------------------
      Product View Control
    -------------------------------------*/

    function searchPropertyController() {
        $(".style-controllder-area .controller").on('click', function () {
            $('.controller').removeClass("active");
            $(this).addClass("active");
        });

        $(".style-controllder-area .list").on('click', function () {
            $(".search-property .column").removeClass("col-sm-6").addClass("col-xs-12");
        });

        $(".style-controllder-area .grid").on('click', function () {
            if ($('.search-property .column').hasClass("col-xs-12")) {
                $('.search-property .column').removeClass("col-xs-12").addClass("col-sm-6");
            }
        });

    }

    searchPropertyController();


    /*----------------------------------------
      Select Tag Style
    ---------------------------------------*/

    $('.listing-search-form #city').selectpicker({
        style: 'form-control white-bg',
    });

    $('.listing-search-form #type').selectpicker({
        style: 'form-control white-bg',
    });

    $('.listing-search-form #bedroom').selectpicker({
        style: 'form-control white-bg',
    });

    $('.listing-search-form #washroom').selectpicker({
        style: 'form-control white-bg',
    });

    $('#search-field-category').selectpicker({
        style: 'form-control white-bg',
    });

    $('#agents-city').selectpicker({
        style: 'form-control white-bg',
    });

    $('#search-catagries').selectpicker({
        style: 'form-control white-bg',
    });

    $('#listing_category').selectpicker({
        style: 'form-control white-bg',
    });


    $('#listing_price').selectpicker({
        style: 'form-control white-bg',
    });

    $('#listing_timezone').selectpicker({
        style: 'form-control white-bg',
    });

    $('#page-language').selectpicker({
        style: 'form-control white-bg',
    });


    /*-------------------------------------------
      TineMCE JS
    -------------------------------------------*/

    tinymce.init({
        selector: '.tinymce-editor',
        height: 200,
        menubar: false,
        theme: 'modern',
        mobile: {
            theme: 'mobile',
            plugins: ['autosave', 'lists', 'autolink']
        },
        plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table contextmenu paste code'
    ],
        toolbar: 'bold italic | alignleft aligncenter alignright alignjustify | link image | undo redo',
    });

    /*----------------------------------------
      Owl Carousel
    ---------------------------------------*/

    if ($('.cp-slider').length > 0) {
        $('.cp-slider').each(function () {
            $(this).owlCarousel({
                singleItem: true,
                slideSpeed: 200,
                autoPlay: 3000,
                stopOnHover: true,
                mouseDrag : false,
                touchDrag : false,
                navigation: true,
                navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                pagination: false
            });
        });
    };

    if ($('.listing-slider').length > 0) {
        $('.listing-slider').each(function () {
            $(this).owlCarousel({
                singleItem: true,
                slideSpeed: 200,
                autoPlay: 3000,
                stopOnHover: true,
                navigation: true,
                navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                pagination: false
            });
        });
    };

    if ($('.post-slider').length > 0) {
        $('.post-slider').each(function () {
            $(this).owlCarousel({
                singleItem: true,
                slideSpeed: 200,
                autoPlay: 3000,
                stopOnHover: true,
                navigation: true,
                navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                pagination: false
            });
        });
    };

    if ($('#property-slider').length > 0) {
        $('#property-slider').owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    };


    $('.testimonial').each(function () {
        $(this).owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    });

    /*----------------------------------------
      Price Range
    ---------------------------------------*/

    $('.nstSlider').nstSlider({
        "left_grip_selector": ".leftGrip",
        "right_grip_selector": ".rightGrip",
        "value_bar_selector": ".bar",
        "value_changed_callback": function (cause, leftValue, rightValue) {
            $(this).parent().find('.leftLabel').text(leftValue);
            $(this).parent().find('.rightLabel').text(rightValue);
        }
    });


    /*-----------------------------------
    Contact Form
    -----------------------------------*/
    // Function for email address validation
    function isValidEmail(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

        return pattern.test(emailAddress);

    }
    $("#contactForm").on('submit', function (e) {
        e.preventDefault();
        var data = {
            name: $("#name").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
            subject: $("#subject").val(),
            message: $("#message").val()
        };

        if (isValidEmail(data['email']) && (data['message'].length > 1) && (data['name'].length > 1)) {
            $.ajax({
                type: "POST",
                url: "sendmail.php",
                data: data,
                success: function () {
                    $('#contactForm .input-success').delay(500).fadeIn(1000);
                    $('#contactForm .input-error').fadeOut(500);
                }
            });
        } else {
            $('#contactForm .input-error').delay(500).fadeIn(1000);
            $('#contactForm .input-success').fadeOut(500);
        }

        return false;
    });

    $(window).on('resize orientationchange', function () {
        navbarCollapse();
        footerNav();
        sideMap();
        searchPropertyController();
    });
})
