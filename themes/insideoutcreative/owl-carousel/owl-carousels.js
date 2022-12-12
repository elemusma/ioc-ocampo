$('.products-carousel').owlCarousel({
    // center: true,
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    // stagePadding:170,
    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});

$('.big-gallery').owlCarousel({
    // center: true,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    // stagePadding:170,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplaySpeed: 2000,
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
    items: 1,
    // responsive: {
    //     0: {
    //         items: 1
    //     },
    //     600: {
    //         items: 1
    //     },
    //     1000: {
    //         items: 1
    //     }
    // }
});
$('.small-gallery').owlCarousel({
    // center: true,
    rtl: true,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    // stagePadding:170,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplaySpeed: 3000,
    autoplayHoverPause: false,
    animateOut: 'slideOutRight',
    animateIn: 'slideInLeft',
    // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
    items: 1,
    // responsive: {
    //     0: {
    //         items: 1
    //     },
    //     600: {
    //         items: 1
    //     },
    //     1000: {
    //         items: 1
    //     }
    // }
});
$('.testimonial-carousel').owlCarousel({
    // center: true,
    // rtl: true,
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    // stagePadding:170,
    autoplay: false,
    autoplayTimeout: 3500,
    autoplaySpeed: 5000,
    autoplayHoverPause: false,
    // animateOut: 'slideOutRight',
    // animateIn: 'slideInLeft',
    navText: ["<img src='https://insideoutcreative.io/wp-content/uploads/2022/12/Arrow-Circle-Left.png' />", "<img src='https://insideoutcreative.io/wp-content/uploads/2022/12/Arrow-Circle-Right.png' />"],
    items: 1,
});