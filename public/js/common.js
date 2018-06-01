/**
 * Created by Administrator on 2018/5/13.
 */

function sliderShow(){
    $("#slider>.item").hover(function(){
        $(this).children(".itemUl").slideDown(300);
    },function(){
        $(this).children(".itemUl").slideUp(300);
    })
}
function bannerScroll(){
    if($(".banner ul li").length>1){
        $(".banner_slider,.banner>.icon").show();
        new Swiper('.banner', {
            autoplay: 3000,
            speed: 3000,
            pagination: '.banner_slider',
            prevButton: '.icon-prev',
            nextButton: '.icon-next'
        })
    }else
    {
        new Swiper('.banner', {
            autoplay: false
        });
        $(".banner_slider,.banner>.icon").hide()

    }

};
//返回顶部
function goTopShow(){
 
    if($(window).scrollTop()>50){
        $('.goTop').show(500)
    }else{
         $('.goTop').hide(500)
    }
}
function goBlackTop(){    
   $(window).scrollTop(0)
}
//响应slider
function slider(){
    if($("#slider").is(":hidden")){
        $("#slider").slideDown()
    }else {
        $("#slider").slideUp()
    }

}
$(function(){
    sliderShow();
    bannerScroll();
    $(window).scroll(function(){
        goTopShow(); 
    })
   
    $(".sliderShowBtn").click(function(){
           slider()
    })
    $('.goTop').click(function(){
        goBlackTop()
    })

});