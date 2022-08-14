(function($) {
    "use strict";
    $(document).ready(function() {

        $(function () {
         $('#datepicker2').datetimepicker({
          format: 'DD/MM/YYYY'
             });
        });  


        var a='';
        $(window).scroll(function() {
        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
                //alert(countTo);
            $({
                countNum: $this.text()
            }).animate({
                countNum: countTo
                },

                {

                duration: 4000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                    //alert('finished');
                }

                });
            });
            a = 1;
        }

        });

         // Back to top button
          $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
              $('.back-to-top').fadeIn('slow');
            } else {
              $('.back-to-top').fadeOut('slow');
            }
          });

          $('.back-to-top').click(function() {
            $('html, body').animate({
              scrollTop: 0
            }, 1500);
            return false;
          });

        // Homepage Main slider 
        
        $('#bannerSlider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            autoplay: true,
            smartSpeed: 2000,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
            }
        })
        $('#service-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            autoplay: true,
            smartSpeed: 1000,
            slideBy:1,
            autoplayTimeout:3500,
            responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
            }
        })

        $('#team-slider').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            dots: true,
            autoplay: false,
            smartSpeed: 1000,
            slideBy:1,
            autoplayTimeout:3500,
            responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
            }
        })



        $('#tg-testimonialsslider').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            autoplay: true,
            smartSpeed: 1000,
            slideBy:1,
            autoplayTimeout:5000,
            responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
            }
        })
        new WOW().init();

        $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
                $(this).toggleClass('open');        
            },
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
                $(this).toggleClass('open');       
            }
        );
        // $(".headArrow").click(function(event) {
        //     event.preventDefault();
        //     if ($(this).next('ul').length) {
        //         $(this).next('ul').slideToggle();
        //     }
        // });
        $(".headArrow").click(function(event) {
            event.preventDefault();
            $('.mega-dropdown').toggleClass('open')
        });

        $('.navbar-toggler').click(function(){
            $('.navbar-collapse').toggleClass('in');
        })
        $("#showForm").click(function(e) {
            e.preventDefault();
            $(".fixedContactform").addClass("show");
            });
            $('.contactContainer .closeBtn').click(function(e) {
            e.preventDefault();
            $(".fixedContactform").removeClass("show");
        });

        // Add minus icon for collapse element which is open by default
            $(".collapse.in").each(function(){
                $(this).siblings(".panel-heading").find(".glyphicon").addClass("rotate");
            });
            
            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function(){
                $(this).parent().find(".glyphicon").addClass("rotate");
            }).on('hide.bs.collapse', function(){
                $(this).parent().find(".glyphicon").removeClass("rotate");
            });

            
        
    });
    
})(jQuery)