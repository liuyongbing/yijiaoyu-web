/**
 * Created by Administrator on 2018/5/15.
 */
$(function(){
    //筛选框
    $(".inputBox").click(function(){
        var that = $(this);
        if( $(this).next('.selectList').is(":hidden")){
            $(this).children(".icon").addClass('icon-active');
            $(this).next('.selectList').slideDown(300);
            $(".selectList .item a").click(function(){
                var text = $(this).text();
                $(this).parents(".selectList").prev('.inputBox').children('input[type="text"]').val(text);
                $(this).parents(".selectList").slideUp(300);
                that.children(".icon").removeClass('icon-active');
                that.next('.selectList').slideUp(300)
            })
        }else {
            $(this).children(".icon").removeClass('icon-active');
            $(this).next('.selectList').slideUp(300)
        }

    });
    //判断数据数量
    if( $("#newslistBox li").length<1){
        console.log($("#newslistBox li").length);
        $(".dataShow").hide();
        $(".noData").show();
    }else {
        $(".noData").hide();
        $(".dataShow").show()
    }
});
