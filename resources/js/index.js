$(document).ready(function(){

    // Sticky navigation
    $('.js--section-features').waypoint(function(direction) {
        if(direction == 'down') {
            $('nav').addClass('sticky')
        }
        else {
            $('nav').removeClass('sticky')
        }
    }, {offset: "60px" }
    );


    // Scroll on buttons
    $('.js--scroll-to-plans').click(function() {
        $('html, body').animate({scrollTop: $('.js--section-plans').offset().top}, 1000);
    })

    $('.js--scroll-to-start').click(function() {
        $('html, body').animate({scrollTop: $('.js--section-features').offset().top});
    })


    // Navigation scroll
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });


    //   Animations on scroll
    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeIn');
    },
    {offset: '50%'})


    $('.js--wp-2').waypoint(function(direction){
        $('.js--wp-2').addClass('animated fadeInUp')
    }, {
        offset: '50%'
    })


    $('.js--wp-3').waypoint(function(direction){
        $('.js--wp-3').addClass('animated fadeIn')
    }, {
        offset: '60%'
    })


    $('.js--wp-4').waypoint(function(direction){
        $('.js--wp-4').addClass('animated pulse')
    }, {
        offset: '50%'
    })


    // Mobile navigation
    $('.js--nav-icon').click(function() {
        let nav = $('.js--main-nav');
        let icon = $('.js--nav-icon i')

        nav.slideToggle(200);
        icon.toggleClass('ion-navicon-round ion-close-round')  
        // if (icon.hasClass('ion-navicon-round')){
        //     icon.addClass('ion-close-round');
        //     icon.removeClass('ion-navicon-round')
        // }
        // else {
        //     icon.addClass('ion-navicon-round');
        //     icon.removeClass('ion-close-round')
        // }
    })

    // Map
    let map = new GMaps({
      div: '.map',
      lat: 43.68,
      lng: -79.335,
      zoom: 12
    });

    map.addMarker({
        lat: 43.6741299,
        lng: -79.4458869,
        title: 'Toronto',
        infoWindow: {
            content: '<p>Home</p>'
          }
      });

});