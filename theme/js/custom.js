$(document).ready(function(){
    
    //fullpage init
    let switchRunOnce = false;
    $('#fullpage').fullpage({
        //options here
        scrollOverflow: true,
        normalScrollElements: '.hero',
        scrollOverflowMacStyle:true,
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
                $(".logo").removeClass("black")
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
})

