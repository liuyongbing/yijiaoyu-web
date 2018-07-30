/**
 * Created by Administrator on 2018/5/22.
 */
$(function(){
  var box = $(".brand_center .title_tab").offset();
  var boxTop = box.top-20;
  $(window).on('scroll',function(){
      if($(this).scrollTop()>boxTop){
           $(".brand_center .title_tab").addClass('fixedNav')
      }else {
          $(".brand_center .title_tab").removeClass('fixedNav')
      }
  });
 $("#brands_tab .tab").click(function(){
     $(this).addClass('active').siblings('.tab').removeClass('active');
      var _index = $(this).index();
     $(".main_brand").eq(_index).slideDown(300).siblings('.main_brand').slideUp(300)
 })
 new Swiper('#ry',{
     slidesPerView : 3,
     loop:true,
     prevButton: '.ry-prev',
     nextButton: '.ry-next'
})

});