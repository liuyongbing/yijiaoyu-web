@extends('layouts.main')

@section('title', trans('brand.' . $brand))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/qtds.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main">
    
    {!! \App\Widgets\Banner::list('pocketcat') !!}
    
    <!-- -->
    <section class="brand_center kdm_center" id="brands_tab">
        <div class="title_tab">
            <a href="javascript:;" class="tab active">企业品牌</a>
            <a href="javascript:;" class="tab">课程品牌</a>
            <a href="javascript:;" class="tab">人物品牌</a>
            <a href="javascript:;" class="joinUs">加入我们</a>
        </div>
    </section>
    <section class="com_brand main_brand kdm_brand" >
        <div class="p1">
            <img src="/imgs/kdm/logo.png{{ $STATIC_VERSION }}" alt="口袋猫" class="logo"/>
            <p class="info">
                我们是优雅的缔造者，<br/>
                我们是生命的设计师，<br/>
                我们更是口袋猫的一员。<br/>
                我们怀揣着满腔的热血，<br/>
                用创造与奉献打造企业新品牌，<br/>
                以专业和服务主导舞蹈大市场，<br/>
                让青春与活力散发光热，<br/>
                用智慧和汗水创造价值。
            </p>
        </div>
        <div class="p2">
            <a href="javascript:;">
                <img src="/imgs/kdm/li01.jpg{{ $STATIC_VERSION }}" alt="01"/>
            </a>
            <a href="javascript:;">
                <img src="/imgs/kdm/li02.jpg{{ $STATIC_VERSION }}" alt="240"/>
            </a>
            <a href="javascript:;">
                <img src="/imgs/kdm/li03.jpg{{ $STATIC_VERSION }}" alt="1000"/>
            </a>
        </div>
        <div class="p3">
            <h2 class="title">我们是优雅的缔造者，我们是生命的设计师</h2>
            <div class="info">
                <img src="/imgs/kdm/ban002.jpg{{ $STATIC_VERSION }}" alt="教学方式"/>
        </div>
        </div>
        <div class="p4">
            <img src="/imgs/kdm/fzlc.png{{ $STATIC_VERSION }}" alt="发展历程"/>
        </div>
        <div class="p5">
            <h3 class="title">荣誉证书</h3>
            <img src="/imgs/kdm/ry01.jpg{{ $STATIC_VERSION }}" alt="荣誉01"/>
            <img src="/imgs/kdm/ry02.jpg{{ $STATIC_VERSION }}" alt="荣誉02"/>
            <img src="/imgs/kdm/ry03.jpg{{ $STATIC_VERSION }}" alt="荣誉03"/>
        </div>
    </section>
    <section class="self_brand main_brand kdm_self_brand">
        <div class="p1">
            <h3 class="title"><span class="icon"></span>立体教学 <p>以国际视野培养完整儿童</p></h3>
            <a href="javascript:;">
                <img src="/imgs/kdm/p101.png{{ $STATIC_VERSION }}" alt="p101"/>
            </a>
            <img src="/imgs/kdm/ztp101.jpg{{ $STATIC_VERSION }}" alt="zt"/>
        </div>
        <div class="p1">
            <h3 class="title"><span class="icon"></span>体适能舞蹈—能力篇 <p>25项综合核心能力</p></h3>
            <a href="javascript:;">
            <img src="/imgs/qtds/nl.jpg{{ $STATIC_VERSION }}" alt="nl"/>
                <p class="info"><span class="age">3—12</span>岁为各项能力发展<span class="time">黄金时期</span></p>
            </a>
        </div>
        <div class="p2">
            <h3 class="title"><span class="icon"></span>体适能舞蹈—品行篇</h3>
            <a href="javascript:;">
            <img src="/imgs/kdm/px01.png{{ $STATIC_VERSION }}" alt="class"/>
            </a>
        </div>
        <div class="p2">
            <h3 class="title"><span class="icon"></span>体适能舞蹈—技术篇</h3>
            <a href="javascript:;">
                <img src="/imgs/kdm/px02.jpg{{ $STATIC_VERSION }}" alt="class"/>
            </a>
            <img src="/imgs/kdm/ztp02.jpg{{ $STATIC_VERSION }}" alt="zt"/>
        </div>
        <div class="p3">
            <h3 class="title"><span class="icon"></span>体适能舞蹈—运动营养篇</h3>
            <a href="javascript:;">
            <img src="/imgs/kdm/ll.png{{ $STATIC_VERSION }}" alt="ll"/>
            </a>
        </div>
    </section>
    <section class="user_brand main_brand kdm_user_brand">
        
        <div class="p1">
            <h3 class="title">{{ trans('common.team_manager') }}</h3>
            {!! App\Widgets\Member::all($brand, 'manager') !!}
        </div>
        
        <div class="p2">
            <h3 class="title">{{ trans('common.team_teacher') }}</h3>
            {!! App\Widgets\Member::list($brand, 'teacher') !!}
        </div>
        
        <div class="p3">
            <h3 class="title">{{ trans('common.team_service') }}</h3>
            <img src="/imgs/kdm/kefu.jpg{{ $STATIC_VERSION }}" alt="客服"/>
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