let switchRunOnce = false;
function initFullpage(){
    $('#fullpage').fullpage({
        responsiveWidth: 767,
        autoScrolling:true,
        scrollHorizontally: true,
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
$(document).ready(function(){
    
    //preloader



    //modal slick
    $(".tab-title").click(function(){
        $(".modal").fadeIn();
    })
    $(".close-modal").click(function(){
        $(".modal").fadeOut();
    })
    $(".tabs").slick({
        dots: true,
        arrows: true,
        speed: 500,
        fade: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next')
    })
    $(".tab-titles .tab-title").click(function(){ 
        index = $(this).data("index");
        $('.tabs').slick('slickGoTo', index);
    })
    if($(window).innerWidth() >= 767){
        initFullpage()
    }
})
if($(window).innerWidth() <= 767){
let progress = 450
let time = 120
var timer = setInterval(() => {
    $(".preloader svg circle").css("stroke-dashoffset", `${progress}`)
    let percentage = ((450 - progress)/1.5)
    $(".preloader .percentage .change").text(`${Math.round(percentage)}`)
    if (progress <= 300){
        clearInterval(timer)
        if($(window).innerWidth() <= 767){
            $('body').css("overflow-y", "visible")
            $('body').css("overflow-x", "hidden")
            $("#fullpage").removeClass("notready")
            $(".preview").fadeOut()
            initFullpage()
        }
    }
    progress--
}, time);
}
