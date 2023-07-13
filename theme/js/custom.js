$(document).ready(function(){
    
    //fullpage init

    $('#fullpage').fullpage({
        //options here
        autoScrolling:true,
        scrollHorizontally: true,
        afterLoad: function(origin, destination, direction, trigger){
            if (destination == 1){
                // $(".stat svg").removeClass("animate")
                $(".stat1 .progress svg").addClass("animate")
            }else if (destination == 2){
                // $(".stat svg").removeClass("animate")
                $(".stat2 .progress svg").addClass("animate")
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
})
$(".tab-titles .tab-title").click(function(){ 
    index = $(this).data("index");
    // console.log(index)
    // tab = $(".slick-slide").attr("tabindex")
    $('.tabs').slick('slickGoTo', index);
// console.log(tab);
})

