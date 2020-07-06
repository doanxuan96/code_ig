jQuery(document).ready(function($) {
        var do_alert = function(){
            jQuery("#tab_uk-study-tour").removeClass("active");
            jQuery("#tab_canada-studytour").removeClass("active");
            jQuery(".tab-video-sd").removeClass("active");
        };
        setTimeout(do_alert, 1000);
        jQuery('.slider-cam-nhan').lightSlider({
            item:1,
            slideMargin:0,
            auto:false,
            pause: 5000,
            speed: 1000,
            pager: false,
            controls: true,
            loop:false,
            easing: 'cubic-bezier(0.4, 0, 1, 1)',
            prevHtml:'<i class="fa fa-angle-left"></i>',
            nextHtml:'<i class="fa fa-angle-right"></i>',
        });
        jQuery('.sliders-psst').lightSlider({
            item:1,
            slideMargin:0,
            auto:false,
            pause: 5000,
            speed: 1000,
            pager: true,
            controls: true,
            loop:true,
            easing: 'cubic-bezier(0.4, 0, 1, 1)',
            prevHtml:'<i class="fa fa-angle-left"></i>',
            nextHtml:'<i class="fa fa-angle-right"></i>',
        });
        var do_sd = function(){
            jQuery(".tab-pane-slider").removeClass("active");
           
        };
        setTimeout(do_sd, 1000);
        $('.slider-gallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:6,
            slideMargin:0,
            enableDrag: false,
            // verticalHeight:500,
            currentPagerPosition:'left',
            prevHtml:'<i class="fa fa-angle-left"></i>',
            nextHtml:'<i class="fa fa-angle-right"></i>',
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        thumbItem:4,
                        slideMargin:6,
                      }
                },
            ]
        });
        jQuery('.slider-doi-tac').lightSlider({
            item:5,
            slideMargin:10,
            auto:true,
            pause: 5000,
            speed: 1000,
            pager: false,
            controls: true,
            loop:true,
            easing: 'cubic-bezier(0.4, 0, 1, 1)',
            prevHtml:'<i class="fa fa-angle-left"></i>',
            nextHtml:'<i class="fa fa-angle-right"></i>',
              responsive : [
                {
                    breakpoint:767,
                    settings: {
                         item:3,
                        slideMargin:6,
                      }
                },
            ]
        });
        

        jQuery('.slider-baiviet').lightSlider({
            item:4,
            slideMargin:30,
            auto:true,
            pause: 6000,
            speed: 1000,
            pager: true,
            controls: true,
            loop:true,
            easing: 'cubic-bezier(0.4, 0, 1, 1)',
            prevHtml:'<i class="fa fa-angle-left"></i>',
            nextHtml:'<i class="fa fa-angle-right"></i>',
             responsive : [
                {
                    breakpoint:991,
                    settings: {
                         item:3,
                        slideMargin:6,
                      }
                },
                 {
                    breakpoint:767,
                    settings: {
                         item:2,
                        slideMargin:6,
                      }
                },
                 {
                    breakpoint:500,
                    settings: {
                         item:1,
                        slideMargin:6,
                      }
                },
                 {
                    breakpoint:480,
                    settings: {
                         item:1,
                        slideMargin:6,
                      }
                },
            ]
        });


        // $('[data-fancybox]').fancybox({
        //     youtube : {
        //         controls : 0,
        //         showinfo : 0,
        //     },
        //     vimeo : {
        //         color : 'f00',
        //     }
        // });



        $("#noi-dung-cau-hoi .panel-title a").on("click", function(){
            if($(this).hasClass("active")){
                $(this).removeClass("active");
            }
            else{
                $("#noi-dung-cau-hoi .panel-title a").removeClass("active");
                $(this).addClass("active"); 
            }
        });

        $("#tab-content .panel-title a").on("click", function(){
            if($(this).hasClass("active")){
                $(this).removeClass("active");
            }
            else{
                $("#tab-content .panel-title a").removeClass("active");
                $(this).addClass("active"); 
            }
        });

        // menu icons

        jQuery(".menu-icon .icon-click").click(function(){
            jQuery('.menu-responsive').addClass('active');
            jQuery(".menu-responsive-overlay").addClass('active');
        });
         jQuery(".menu-responsive-overlay").click(function(){
            jQuery('.menu-responsive').removeClass('active');
            jQuery(this).removeClass('active');
        });


        jQuery('.btn-showmenu2').click( function () {
            jQuery('.menu-d-mobile').toggleClass('show-mn-one');
        });
        jQuery('.btn-closemenu').click( function () {
            jQuery('.menu-d-mobile').toggleClass('show-mn-one');
        });
         jQuery(".language").click(function(){
            jQuery('ul .language ul').slideToggle()
            
        });

        $('.moreless-button').click(function() {
            $('.moretext').slideToggle();
              if ($('.moreless-button').text() == "Read more") {
                $(this).text("Read less");
                $(this).toggleClass("read-less");
            } else {
                $(this).text("Read more");
                $(this).toggleClass("read-less");
            }
        });
        var stickyNavTop = jQuery('.header-bottom').offset().top;
        var stickyNav = function(){
            var scrollTop = jQuery(window).scrollTop();
            if (scrollTop > stickyNavTop) {
                jQuery('.header-bottom').addClass('sticky-menu');
            } else {
                jQuery('.header-bottom').removeClass('sticky-menu');
            }
        };
        stickyNav();
        jQuery(window).scroll(function() {
          stickyNav();
      });
});
