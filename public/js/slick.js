$(document).ready(function () {
    // Top Products 
    $('.top').slick({
        dots: false,
        infinite: true,
        speed: 300,
        objectiveHeight: true,
        adaptiveHeight: true,
        autoplay: false,
        autoplaySpeed: 1000,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [            
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false,    
                } 
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                }
            },
        ]
    });

    // Our Values
    $('.values').slick({
      dots: false,
      infinite: true,
    //   autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 1,
      slidesToScroll: 1, 
      arrows: false, 
    })

    // Partners 
    $(".partners").slick({
        dots: false,
        arrows: false,
        autoplay:true,
        autoplaySpeed: 4000,
    })

    // Product details
    $(".img_slider_block").slick({
        dots: true,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    dots: false,
                } 
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                }
            },
        ],       
    })
})