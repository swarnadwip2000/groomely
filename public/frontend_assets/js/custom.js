$('#toggle').click(function() {
  $(this).toggleClass('active');
  $('#overlay').toggleClass('open');
 });


/*----- slier --------*/
$('.slider').slick({
  autoplay: true,
  speed: 2000,
  lazyLoad: 'progressive',
  arrows: true,
  dots: false,
	prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
	nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
});



$('.slick-nav').on('click touch', function(e) {

    e.preventDefault();

    var arrow = $(this);

    if(!arrow.hasClass('animate')) {
        arrow.addClass('animate');
        setTimeout(() => {
            arrow.removeClass('animate');
        }, 2000);
    }

});


$('.feature').slick({
  dots: false,
  arrows:false,
  autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1281,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


$('.best_seller_list').slick({
  dots: false,
  arrows:false,
  autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.img_slide').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  centerMode: true,
  arrows: true,
  dots: false,
  speed: 300,
  centerPadding: '0px',
  infinite: true,
  autoplaySpeed: 5000,
  autoplay: true,
  prevArrow: '<div class="slick-nav prev-arrow"><i class="fa-regular fa-arrow-right"></i></div>',
	nextArrow: '<div class="slick-nav next-arrow"><i class="fa-light fa-arrow-right"></i></div>',

  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]
});
$('.our_shop_slid').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  centerMode: true,
  arrows: false,
  dots: false,
  speed: 300,
  centerPadding: '0px',
  infinite: true,
  autoplaySpeed: 5000,
  autoplay: true,
  prevArrow: '<div class="slick-nav prev-arrow"><i class="fa-regular fa-arrow-right"></i></div>',
	nextArrow: '<div class="slick-nav next-arrow"><i class="fa-light fa-arrow-right"></i></div>',

  responsive: [
    {
      breakpoint: 769,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]
});



				
var events = [
  { Title: "Breakfast with Mom", Date: new Date("11/13/2012") },
  { Title: "Rachel's Birthday", Date: new Date("11/25/2012") },
  { Title: "Meeting with Client", Date: new Date("12/02/2012") }
];  

$("#datepicker").datepicker({
  inline: true,
  firstDay: 1,
  showOtherMonths: true,
  dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
   onSelect: onDateChange,
	minDate: 0
});
 function onDateChange(dateText, inst)
    {
      $("#booking-date").val(dateText);
    }



/*The part of the script that attaches events to dates is borrowed from: http://jsfiddle.net/Zrz9t/1151/   */

/*----- slier --------*/

// Time



