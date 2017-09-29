// Right Tab Start

(function($) {
    $(document).ready(function() {
        'use strict';

        $(document).on('show.bs.tab', '.nav-tabs-right-responsive [data-toggle="tab"]', function(e) {
            var $target = $(e.target);
            var $tabs = $target.closest('.nav-tabs-right-responsive');
            var $current = $target.closest('li');
            var $parent = $current.closest('li.dropdown');
            $current = $parent.length > 0 ? $parent : $current;
            var $next = $current.next();
            var $prev = $current.prev();
            var updateDropdownMenu = function($el, position) {
                $el
                    .find('.dropdown-menu')
                    .removeClass('pull-xs-left pull-xs-center pull-xs-right')
                    .addClass('pull-xs-' + position);
            };

            $tabs.find('>li').removeClass('next prev');
            $prev.addClass('prev');
            $next.addClass('next');

            updateDropdownMenu($prev, 'left');
            updateDropdownMenu($current, 'center');
            updateDropdownMenu($next, 'right');
        });

        $(function(){
          var hash = window.location.hash;
          hash && $('ul.nav a[href="' + hash + '"]').tab('show');

          $('.nav-tabs a').click(function (e) {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop() || $('html').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
          });
        });


        // Right Tab End



        // Inner Tab Start

        $(".tab_content").hide();
        $(".tab_content:first").show();

        /* if in tab mode */
        $("ul.tabs li").click(function() {

            $(".tab_content").hide();
            var activeTab = $(this).attr("rel");
            $("#" + activeTab).fadeIn();

            $("ul.tabs li").removeClass("active");
            $(this).addClass("active");

            $(".tab_drawer_heading").removeClass("d_active");
            $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

        });
        /* if in drawer mode */
        $(".tab_drawer_heading").click(function() {

            // $(".tab_content").hide();
            var d_activeTab = $(this).attr("rel");
            if ($(this).hasClass("d_active")) {
                //do nothing
            } else {
                $(".tab_content").slideUp();
                $("#" + d_activeTab).slideDown();

                $(".tab_drawer_heading").removeClass("d_active");
                $(this).addClass("d_active");

                $(this).siblings().addClass("active-border");

                $("ul.tabs li").removeClass("active");
                $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
            }
        });


        /* Extra class "tab_last" 
           to add border to right side
           of last tab */
        $('ul.tabs li').last().addClass("tab_last");

        // Inner Tab  End


        // Menu Fixed
        $(window).on("scroll", function() {
            var scrolltop = $(window).scrollTop();
            if (scrolltop > 5) {
                $(".main-menu").addClass("main-fixed");
            } else {
                $(".main-menu").removeClass("main-fixed");
            }

        });

        if ($(window).width() < 1024) {
    $(".nav.navbar-nav li").on('click',function() {
        $('.navbar-toggle').removeClass("collapsed");
        $('.navbar-collapse').removeClass("in");
      $('.navbar-toggle').addClass('collapsed');
      $('body').removeClass('overflow-none');
    });

    $('.navbar-toggle').on('click',function() {
     $('body').toggleClass('overflow-none');
   });

}


        // $(function() {
        //     $("html").niceScroll({ cursorcolor: "#a32719", horizrailenabled: false });
        //     $('.gallerys').niceScroll({ cursorcolor: "#a32719", horizrailenabled: false });
        // });

        $(".scroll-down-container").click(function() {
            var x = $(".about-section").offset().top;
            $("html, body").animate({
                scrollTop: x - 120
            }, 1e3)
        })

         // contact-page js starts

    $(".address-format").on("click", function() {
        $(".address-format").removeClass("card-shadow");
        $(this).addClass("card-shadow");
        console.log("me");
        var mapclass = $(this).attr("id");
        $(".map").hide();
        $("." + mapclass).fadeIn(1000);
    });

    $(".map-bar > .container").on({

        mouseleave: function() {
            $(".map").css({ "z-index": "-1", "position": "relative" });
        },
        click: function() {
            
            $(".map").css({ "z-index": "0", "position": "static" });
        }
    });

    // contact-page js ends

    });

})(jQuery);

   // Aircraft Search Filter
    function aircraftfilter() {
              // Declare variables
              var input, filter, ul, li, a, i;
              input = document.getElementById('Searchbar');
              filter = input.value.toUpperCase();
              ul = document.getElementById("guide_detail");
              li = ul.getElementsByClassName('guide-main');

              // Loop through all list items, and hide those who don't match the search query
              for (i = 0; i < li.length; i++) {
                  a = li[i].getElementsByTagName("h3")[0];
                  if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      li[i].parentNode.style.display = "";
                  } else {
                      li[i].parentNode.style.display = "none";
                  }
              }
          } 
// ONscroll Js
          new WOW().init();
