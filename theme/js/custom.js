let switchRunOnce = false;

var $ = jQuery

    function initFullpage(){
        $('#fullpage').fullpage({
            responsiveWidth: 767,
            autoScrolling:true,
            scrollOverflow: true,
            // scrollHorizontally: true,
            afterLoad: function(origin, destination, direction, trigger){
                if (destination == 1){
                    $(".logo").removeClass("black")
                    $(".stat1 .progress svg").addClass("animate")
                }else if (destination == 2){
                    $(".logo").addClass("black")
                    $(".stat2 .progress svg").addClass("animate")
                }else if (destination == 3){
                    $(".logo").addClass("black")
                    $(".stat3 .progress svg").addClass("animate")
                }else if (destination == 4){
                    $(".logo").removeClass("black")
                    $(".stat4 .progress svg").addClass("animate")
                }else if (destination == 5){
                    $(".logo").addClass("black")
                    $(".stat5 .progress svg").addClass("animate")
                    if(switchRunOnce == false){
                        $(".feature").eq(0).addClass("active")
                        let i = 1;
                        setInterval(() => {
                            $(".feature").removeClass("active")
                            $(".feature").eq(i).addClass("active")
                            i++;
                            i = i % $(".feature").length;
                        }, 4000);
                    }
                    switchRunOnce = true;
                }
            }
        });
    }

if($(window).innerWidth() <= 767){
    videoFile = [
        'https://res.cloudinary.com/dzbpsu654/video/upload/v1691193027/Optimized%20Videos/Rpreplay_Final1690857912_zcj4cx.mp4',
        'https://res.cloudinary.com/dzbpsu654/video/upload/v1691193026/Optimized%20Videos/Rpreplay_Final1690857973_ugwl4x.mp4',
        'https://res.cloudinary.com/dzbpsu654/video/upload/v1691193025/Optimized%20Videos/Rpreplay_Final1690857872_xk2cdf.mp4'
    ]
    for (let i = 0; i < $('.tab-item').length; i++) {
        $('.tab-item video').eq(i).attr('src', videoFile[i]);
        $('.tab-item video').eq(i)[0].load()
    }
    //loader
    const timer = function(){
        let progress = 450
        let time = 50
        setInterval(() => {
            $(".preloader svg circle").css("stroke-dashoffset", `${progress}`)
            let percentage = ((450 - progress)/1.5)
            if(percentage >= 100){
                percentage = 100;
            }
            $(".preloader .percentage .change").text(`${Math.round(percentage)}`)
            $('body').css("height", "100vh")
            $('body').css("overflow", "hidden")
            if (progress <= 300){
                clearInterval(timer)
                if($(window).innerWidth() <= 767){
                    $('body').css("height", "auto")
                    $('body').css("overflow", "visible")
                    // $('body').css("overflow-x", "hidden")
                    $("#fullpage").removeClass("notready")
                    $(".preview").fadeOut()
                    // initFullpage()
                }
            }
            progress--
        }, time);
    } 

timer()
}
// $(".header").fadeOut()
// document.onreadystatechange = () => {
//     if (document.readyState === "complete") {
//       $(".header").fadeIn()
//     }
//   };
$(document).ready(function(){

    //mobile bg

    if($(window).innerWidth() <= 567){
        $(".hero").css("background-image", `url(${$(".hero").attr("data-mobile")})`)
    }
    
    //preloader



    //modal slick
    const slickInit= function(){
        $(".tabs").slick({
            dots: true,
            arrows: true,
            speed: 500,
            fade: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next')
        })
    }
    const slickUnInit= function(){
        $(".tabs").slick("unslick")
    }
    $(".tab-title").click(function(){
        slickInit()
        $(".modal").fadeIn();
        index = $(this).data("index");
        $('.tabs').slick('slickGoTo', index);
        for (let i = 0; i < $(".media").length; i++) {
            document.getElementsByClassName('media')[i].pause();
        }
        $(".media").trigger("pause")
    })
    $(".close-modal").click(function(){
        $(".modal").fadeOut(function(){
            slickUnInit()
        });
        for (let i = 0; i < $(".media").length; i++) {
            document.getElementsByClassName('media')[i].pause();
        }
    })
    $(".arrow").click(function(){
        for (let i = 0; i < $(".media").length; i++) {
            document.getElementsByClassName('media')[i].pause();
        }
    });
    // if($(window).innerWidth() >= 767){
        initFullpage();
    // }
});

$(window).scroll(function(){
    if($(window).scrollTop() > 100){
        $(".header").addClass("scrolled")
    }else{
        $(".header").removeClass("scrolled")
    }
}) 
$(window).resize(function(){
    if($(window).innerWidth() <= 567){
        $(".hero").css("background-image", `url(${$(".hero").attr("data-mobile")})`)
    }else{
        $(".hero").css("background-image", `url(${$(".hero").attr("data-desktop")})`)
    }
})
