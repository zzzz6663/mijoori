
(function ($) {
    $(document).ready(function () {


AOS.init();

$('#slider > ul').owlCarousel({
    loop:true,
    rtl: true,
    autoplay:true,
    autoplayTimeout:6000,
    animateOut: 'fadeOut',
    autoplaySpeed: 2000,
    autoplayHoverPause:true,
    margin:10,
            items:1,
    nav:false
})


$('.program-list').owlCarousel({
    rtl: true,
    loop:true,
    nav: true,
    margin:48,
    responsiveClass:true,
    navText: ["<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M24.262,15.884l4.461-3.717a.744.744,0,1,1,.953,1.143L25.9,16.455,29.675,19.6a.744.744,0,0,1-.953,1.143l-4.461-3.717a.745.745,0,0,1,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>",
    "<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M29.675,15.884l-4.461-3.717a.744.744,0,1,0-.953,1.143l3.775,3.146L24.262,19.6a.744.744,0,1,0,.953,1.143l4.461-3.717a.745.745,0,0,0,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>"],
    responsive:{
        0:{
            items:1
        },
        900:{
            items:2
        },
        1400:{
            items:3
        },
        1800:{
            items:4
        }
    }
})


$('.exp-cats-list').owlCarousel({
    rtl: true,
    loop:true,
    nav: true,
    margin:28,
    responsiveClass:true,
    navText: ["<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M24.262,15.884l4.461-3.717a.744.744,0,1,1,.953,1.143L25.9,16.455,29.675,19.6a.744.744,0,0,1-.953,1.143l-4.461-3.717a.745.745,0,0,1,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>",
    "<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M29.675,15.884l-4.461-3.717a.744.744,0,1,0-.953,1.143l3.775,3.146L24.262,19.6a.744.744,0,1,0,.953,1.143l4.461-3.717a.745.745,0,0,0,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>"],
    responsive:{
        0:{
            items:1
        },
        900:{
            items:2
        },
        1400:{
            items:3
        },
        1800:{
            items:3
        }
    }
})

$('.fave-hosts-list').owlCarousel({
    rtl: true,
    nav: true,
    margin:28,
    responsiveClass:true,
    navText: ["<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M24.262,15.884l4.461-3.717a.744.744,0,1,1,.953,1.143L25.9,16.455,29.675,19.6a.744.744,0,0,1-.953,1.143l-4.461-3.717a.745.745,0,0,1,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>",
    "<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M29.675,15.884l-4.461-3.717a.744.744,0,1,0-.953,1.143l3.775,3.146L24.262,19.6a.744.744,0,1,0,.953,1.143l4.461-3.717a.745.745,0,0,0,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>"],
    responsive:{
        0:{
            items:1
        },
        900:{
            items:2
        },
        1400:{
            items:3
        },
        1800:{
            items:4
        }
    }
})
$('.fave-guid-list').owlCarousel({
    rtl: true,
    nav: true,
    margin:28,
    responsiveClass:true,
    navText: ["<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M24.262,15.884l4.461-3.717a.744.744,0,1,1,.953,1.143L25.9,16.455,29.675,19.6a.744.744,0,0,1-.953,1.143l-4.461-3.717a.745.745,0,0,1,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>",
    "<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M29.675,15.884l-4.461-3.717a.744.744,0,1,0-.953,1.143l3.775,3.146L24.262,19.6a.744.744,0,1,0,.953,1.143l4.461-3.717a.745.745,0,0,0,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>"],
    responsive:{
        0:{
            items:1
        },
        900:{
            items:2
        },
        1400:{
            items:3
        },
        1800:{
            items:4
        }
    }
})

$('.guide-pic ul').owlCarousel({
    loop:true,
    rtl: true,
    autoplay:true,
    autoplayTimeout:6000,
    animateOut: 'fadeOut',
    autoplaySpeed: 2000,
    autoplayHoverPause:true,
    margin:10,
            items:1,
            dote: true,
    navText: ["<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M24.262,15.884l4.461-3.717a.744.744,0,1,1,.953,1.143L25.9,16.455,29.675,19.6a.744.744,0,0,1-.953,1.143l-4.461-3.717a.745.745,0,0,1,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>",
    "<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M29.675,15.884l-4.461-3.717a.744.744,0,1,0-.953,1.143l3.775,3.146L24.262,19.6a.744.744,0,1,0,.953,1.143l4.461-3.717a.745.745,0,0,0,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>"],

    nav:true
})

  $(".datepick").persianDatepicker({
     format: 'YYYY/MM/DD',
     themed: 'default',
    initialValue: false,
});
  $(".datepick2").persianDatepicker({
     format: 'YYYY/MM/DD',
     themed: 'dark',
     // 'position': [10,10],
     onShow: function(){
       setTimeout(function(){
    var a= $('.datepicker-container:not(.pwt-hide)')
        a.addClass('sdd');
}, 10);

    },
    initialValue: false,
});


  $('.inline-example').persianDatepicker({
    inline: true,
    altField: '#inlineExampleAlt',
    altFormat: 'LLLL',
    maxDate: new persianDate().add('month', 3).valueOf(),
    minDate: new persianDate().subtract('month', 3).valueOf(),
    timePicker: {
        enabled: true,
        meridiem: {
            enabled: true
        }
    }
});


  $('#header form input.se').click(function(){
    $('#header form').toggleClass('active');
  })
  $('#header form .close').click(function(){
    $('#header form').toggleClass('active');
  })

  $(window).bind('scroll', function () {
    var a = 300;
    if ($(window).scrollTop() > a) {
        $('#header').addClass('fixed');
    } else {
        $('#header').removeClass('fixed');
    }
});
  $(window).bind('scroll', function () {
    var a = 300;
    if ($(window).scrollTop() > a) {
        $('#header2').addClass('fixed');
    } else {
        $('#header2').removeClass('fixed');
    }
});

  $(window).bind('scroll', function () {
    var a = $('#reserve').offset().top;
    if ($(window).scrollTop() > a) {
        $('#reserve').addClass('fixed');
    } else {
        $('#reserve').removeClass('fixed');
    }
});



const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true
});



$('.more-class-pop').click(function(){
    $('#class-list-pop').fadeIn();
})



$('.pop').click(function(){
    $('.pop').fadeOut();
})


$('.pop-content').click(function(event){
    event.stopPropagation();
})


$('#header form .searchpop .stat').click(function(event){
    event.stopPropagation();
    $(this).addClass('active')
    $('#header form .searchpop .date').removeClass('active')
})

$('#header form .searchpop .date').click(function(event){
    event.stopPropagation();
    $(this).addClass('active')
    $('#header form .searchpop .stat').removeClass('active')
})

$('body').click(function(event){
    $('#header form .searchpop .stat').removeClass('active')
    $('#header form .searchpop .date').removeClass('active')
})


// passcode
$('.square1').keyup(function () {
    if (this.value.length == this.maxLength) {
      $(this).next('.square1').focus().val('');
    }
});

$('.filter-cate .filtersub').click(function(){
    $(this).siblings('.filter-content').slideToggle();
})


// Profile Form
$('.dropd .toggled').click(function(){
    $(this).siblings('ul').toggleClass('active');
})
$('.dropd ul li').click(function(){
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    $(this).parents('.dropd').fadeOut();
})
$('.input-content input').click(function(){
    $(this).siblings('.dropd').fadeIn();
})
// End Form



 $('#menus').mmenu({
    offCanvas: {
       position  : "right"
    }
 });







    })
})(jQuery);
