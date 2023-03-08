
$(document).ready(function () {

    $("#owl-demo").owlCarousel({
        items: 1,

        slideSpeed: 300,
        paginationSpeed: 400,
        animateOut: 'fadeOut',
        autoplayTimeout: 3000,
        autoplay: 1000,
        autoplayHoverPause: true,
        loop: true

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

});

$(document).ready(function () {
    var owl = $("#owl-demo2");
    $("#owl-demo2").owlCarousel({
        items: 1,
        slideSpeed: 1000,
        paginationSpeed: 100,
        animateOut: 'fadeOut',
        autoplayTimeout: 5000,
        autoplay: 1000,
        autoplayHoverPause: true,
        loop: true,
        dots:false
       
        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false
    });
    $(".next").click(function(){
        owl.trigger('next.owl.carousel');
      })
      $(".prev").click(function(){
        owl.trigger('prev.owl.carousel');
      })
});
