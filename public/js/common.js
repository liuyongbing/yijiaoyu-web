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
    $(".sliderShowBtn").click(function(){
           slider()
    })

});