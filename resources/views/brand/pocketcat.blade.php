@extends('layouts.main')

@section('title', trans('brand.' . $brand))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/qtds.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main">
    
    {!! \App\Widgets\Banner::list('pocketcat') !!}
    
    <section class="brand_center kdm_center" id="brands_tab">
        <div class="title_tab">
            <a href="javascript:;" class="tab active">企业品牌</a>
            <a href="javascript:;" class="tab">课程品牌</a>
            <a href="javascript:;" class="tab">加入我们</a>
        </div>
    </section>
    
    <!-- 企业品牌 -->
    <section class="com_brand main_brand kdm_brand" >
        <div class="p1 kdm_qy_p1">
           <div class="left fl">
               <img src="/imgs/kdm/m02qyleft.jpg{{ $STATIC_VERSION }}" alt="leftimg"/>
           </div>
           <div class="right fr">
               <h3 class="title">「口袋猫」品牌简介</h3>
               <p class="title_en">Brand introduction</p>
               <p class="info">「口袋猫」是【翼教育】旗下舞蹈教育品牌，成立于2013年，专注于3-12岁舞蹈艺术教育。「口袋猫」秉承“通过舞蹈艺术，坚定自我，发现人生”的信念，运用5S教学理念、3D教学模式，独创的音乐曲目，专业的师资团队，点亮孩子“为热爱而活，为舞台而生”的艺术梦想。
凭借先进的教学理念和现代化的教学模式，目前在宜昌拥有11家舞馆，30位舞蹈艺术专业教师，总营业面积超过2000平米。是宜昌地区最大的舞蹈艺术培训连锁机构，深受舞蹈同行和孩子家长的一致认可。</p>
           </div>
        </div>
        <div class="p2 kdm_qy_p2">
           <div class="img_box">
            <img src="/imgs/kdm/m02qyp3.png{{ $STATIC_VERSION }}" alt="品牌优势"/>
        </div>
         <img src="/imgs/kdm/m02qyp22.png{{ $STATIC_VERSION }}" alt="img" />
        </div>
        <div class="p4">
            <img src="/imgs/kdm/fzlc.png{{ $STATIC_VERSION }}" alt="发展历程"/>
        </div>
        <div class="p5" >
            <h3 class="title">我们的荣誉<p class="title_en">our honor</p></h3>
            <div class="ry_box swiper-container" id="ry"> 
            <ul class="ry_ul swiper-wrapper">
                <li class="item swiper-slide"><img src="/imgs/kdm/ry01.jpg{{ $STATIC_VERSION }}" alt="荣誉01"/></li>
                <li class="item swiper-slide"><img src="/imgs/kdm/ry02.jpg{{ $STATIC_VERSION }}" alt="荣誉01"/></li>
                <li class="item swiper-slide"><img src="/imgs/kdm/ry03.jpg{{ $STATIC_VERSION }}" alt="荣誉01"/></li>
            </ul>
            <a class="swiper-button-prev ry-prev icon"></a>
            <a class="swiper-button-next ry-next icon"></a>
        </div>
        </div>
    </section>
    <!-- 企业品牌 End -->
    
    <!-- 课程品牌 -->
    <section class="self_brand main_brand kdm_self_brand">
        <div class="p1 kdm_jx">
            <h3 class="title">教学理念  <p class="title_bottom">5S教学理念:通过舞蹈艺术，坚定自我，发现人生</p></h3>
            <ul class="ulBox">
                <li class="item">
                    <img src="/imgs/kdm/m02item05.png{{ $STATIC_VERSION }}" alt="感知"/>
                    <p >培养音乐的节奏感，从大师的乐曲中感受舞蹈的基础情绪</p>
                </li>
                <li class="item">
                    <img src="/imgs/kdm/m02item04.png{{ $STATIC_VERSION }}" alt="体验"/>
                    <p >尝试用肢体的动作，在音乐的中体会各种丰盛的情绪共鸣</p>
                </li>
                <li class="item">
                    <img src="/imgs/kdm/m02item03.png{{ $STATIC_VERSION }}" alt="理解"/>
                    <p >通过对音乐的理解，利用肢体语言与乐曲进行对话，获得更多的认知</p>
                </li>
                <li class="item">
                    <img src="/imgs/kdm/m02item02.png{{ $STATIC_VERSION }}" alt="想象"/>
                    <p >认识本我，寻找真实的自我。通过艺术的演绎，表达内心独立的情感</p>
                </li>
                <li class="item">
                    <img src="/imgs/kdm/m02item01.png{{ $STATIC_VERSION }}" alt="创造"/>
                    <p >认识并突破艺术形式与流派，创造能量密度更高的自我表达方式</p>
                </li>
            </ul>
            <img src="/imgs/kdm/ztp101.jpg{{ $STATIC_VERSION }}" alt="zt" />
        </div>
        <div class="p1 kdm_ms">
            <h3 class="title">教学模式 <p>3D教学体系:课堂学习+家中复习+舞台演绎</p></h3>
            <div class="content">
                <ul class="left fl">
                    <li class="item"><span class="tag">课堂学习</span>视频+独创+名师+课件+音乐+教学</li>
                    <li class="item"><span class="tag">家中复习</span>私播+名师+重难+课堂+在线+点解</li>
                    <li class="item"><span class="tag">舞台演绎</span>专业+全国+艺圈+考级+赛事+汇演</li>
                </ul>
                <div class="right fr">
                     <img src="/imgs/kdm/m02right.jpg{{ $STATIC_VERSION }}" alt="rightimg"/>
                </div>
            </div>
        </div>
        <div class="p2 kdm_jxxm">
            <a href="javascript:;">
                <img src="/imgs/kdm/m02p3.png{{ $STATIC_VERSION }}" alt="class"/>
            </a>
            <img src="/imgs/kdm/ztp02.jpg{{ $STATIC_VERSION }}" alt="zt"/>
        </div>
    </section>

</article>
@endsection

@section('script')
<script src="{{ asset(elixir('js/brands.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript">
$(function() {
    var page = 2;
    $('.loadmore').click(function() {
        $.ajax({
            method: "GET",
            url: "{{ route('members.index') }}",
            data: { 
                'brand_id' : $(this).attr('data-brand'),
                'team_type' : $(this).attr('data-team'),
                'page' : page,
                'page_size': $(this).attr('data-size')
            },
            dataType: 'json',
            success: function(response) {
                var dataStr = '';
                if (response.items)
                {
                    $(response.items).each(function(i, item) {
                        dataStr += '<li class="item">';
                        dataStr += '    <img src="' + item.image_url + '" alt="' + item.username + '" />';
                        dataStr += '    <div class="mark">';
                        dataStr += '        <h3 class="title">' + item.username + '</h3>';
                        dataStr += '    </div>';
                        dataStr += '</li>';
                    })
                    page += 1;
                    
                    $(".loadmore").parent().before(dataStr);
                }
                if (false == response.loadmore)
                {
                    $('.loadmore').parent().hide();
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown)
            {
                alert('服务器错误');
            }
        })
    }) 
});
</script>
@endsection