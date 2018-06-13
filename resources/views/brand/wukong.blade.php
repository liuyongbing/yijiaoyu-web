@extends('layouts.main')

@section('title', trans('brand.' . $brand))

@section('style')
<link href="{{ asset(elixir('css/qtds.css')) }}{{ $STATIC_VERSION }}" rel="stylesheet" />
@endsection

@section('content')
<article class="main">
    
    {!! \App\Widgets\Banner::list('wukong') !!}
    
    <!-- -->
    <section class="brand_center" id="brands_tab">
        <div class="title_tab">
            <a href="javascript:;" class="tab active">企业品牌</a>
            <a href="javascript:;" class="tab">课程品牌</a>
            <a href="javascript:;" class="tab">人物品牌</a>
            <a href="javascript:;" class="joinUs">加入我们</a>
        </div>
    </section>
    <section class="com_brand main_brand" >
        <div class="p1">
            <img src="/imgs/logo/logo.png{{ $STATIC_VERSION }}" alt="齐天大圣" class="logo"/>
            <p class="info">
                每个孩子都是天真无邪，活泼可爱；<br/>
                调皮、贪玩、撒泼、不羁，<br/>
                就像大闹天宫孙猴子。<br/>
                直到遇见给大圣戴上紧箍咒的恩师，<br/>
                孩子的人生，终归萌生梦想。<br/>
                礼仪廉耻、忍耐克己、百折不屈，<br/>
                跆拳道精神，和梦想伴随一生。<br/>
                【齐天大圣】跆拳道，The King of Taekwondo。<br/>
                让正直和果敢，陪伴孩子一生。<br/>
            </p>
        </div>
        <div class="p2">
            <a href="javascript:;">
                <img src="/imgs/qtds/two01.png{{ $STATIC_VERSION }}" alt="50"/>
            </a>
            <a href="javascript:;">
                <img src="/imgs/qtds/two02.png{{ $STATIC_VERSION }}" alt=""/>
            </a>
            <a href="javascript:;">
                <img src="/imgs/qtds/two03.png{{ $STATIC_VERSION }}" alt=""/>
            </a>
        </div>
        <div class="p3">
            <h2 class="title">叫我第一名</h2>
            <div class="info">
                在中国教育行业，有这样一个跆拳道品牌<br/>
                它有一个响亮的名字——齐天大圣<br/>
                很多人好奇它的来历<br/>
                今天，他们的创始团队给出了有趣的解释<br/>
            <p></p>
                每个孩子都是天真无邪，活泼可爱<br/>
                调皮、贪玩、撒泼、不羁<br/>
                就像大闹天宫的孙猴子<br/>
                直到遇见给大圣戴上紧箍咒的恩师<br/>
                孩子的人生，终归萌生梦想<br/>
                礼义廉耻、忍耐克己、百折不屈<br/>
                跆拳道精神，和梦想伴随一生<br/>
            <p></p>
                他们说：哪有什么天生丽质<br/>
                天天坚持，成绩和颜值同样漂亮<br/>
                自2011年起<br/>
                通过多年的积累经验、沉淀师资、创新教学、探索品牌<br/>
                齐天大圣终于走上了异军突起的道路<br/>
            <p></p>
                他们说：哪有什么自带光环<br/>
                梦想如火，遇则燎原<br/>
                从1名学员，一家道馆裂变到30家道馆<br/>
                220名师资队伍，培训学员人数达30000余名<br/>
                从西陵区、伍家区、夷陵区到宜昌周边县市<br/>
                再到潜江、恩施、安徽、山东<br/>
                齐天大圣的足迹逐渐遍布湖北，走向全国<br/>
            <p></p>
                坚守初心<br/>
                打造陪伴孩子成长的素质教育平台<br/>
                齐天大圣一直在行动<br/>
            <p></p>
                作为湖北省跆拳道协会优秀道馆<br/>
                三峡大学体育学院后备人才储备基地<br/>
                湖北民族学院体育学院创新创业基地<br/>
                韩国嘉泉大学跆拳道特长生保送点<br/>
            <p></p>
                齐天大圣向所有孩子诚挚呼吁<br/>
                有梦尽管去拼！<br/>
                在学有所成时，跆拳伴你快乐<br/>
                待功成名就时，荣耀有你有我<br/>
                齐天大圣定将与你一起领武幸福！<br/>
        </div>
        </div>
        <div class="p4">
            <img src="/imgs/qtds/fzlc.png{{ $STATIC_VERSION }}" alt="发展历程"/>
        </div>
        <div class="p5">
            <h3 class="title">荣誉证书</h3>
            <img src="/imgs/qtds/ry01.jpg{{ $STATIC_VERSION }}" alt="荣誉01"/>
            <img src="/imgs/qtds/ry02.jpg{{ $STATIC_VERSION }}" alt="荣誉02"/>
            <img src="/imgs/qtds/ry03.jpg{{ $STATIC_VERSION }}" alt="荣誉03"/>
        </div>
    </section>
    <section class="self_brand main_brand">
        <div class="p1">
            <h3 class="title"><span class="icon"></span>体智能跆拳道—能力篇 <p>25项综合核心能力</p></h3>
            <a href="javascript:;">
            <img src="/imgs/qtds/nl.jpg{{ $STATIC_VERSION }}" alt="nl"/>
                <p class="info"><span class="age">3—12</span>岁为各项能力发展<span class="time">黄金时期</span></p>
            </a>
        </div>
        <div class="p2">
            <h3 class="title"><span class="icon"></span>体智能跆拳道—品行VS技术篇 <p>青少年儿童身心能健康专家</p></h3>
            <a href="javascript:;">
            <img src="/imgs/qtds/class.png{{ $STATIC_VERSION }}" alt="class"/>
            </a>
        </div>
        <div class="p3">
            <h3 class="title"><span class="icon"></span>体智能跆拳道—运动营养篇 <p>跆拳道运动营养对应目标</p></h3>
            <a href="javascript:;">
            <img src="/imgs/qtds/ll.png{{ $STATIC_VERSION }}" alt="ll"/>
            </a>
        </div>
        <div class="p4">
            <h3 class="title"><span class="icon"></span>体智能跆拳道立体全方位教学体系 <p>青少年儿童身心能健康专家</p></h3>
            <a href="javascript:;">
            <img src="/imgs/qtds/table.jpg{{ $STATIC_VERSION }}" alt="table"/>
            </a>
        </div>
    </section>
    <section class="user_brand main_brand">
        <div class="p1">
            <h3 class="title">管理团队</h3>
            {!! App\Widgets\Member::all($brand, 'manager') !!}
        </div>
        
        <div class="p2">
            <h3 class="title">教练团队</h3>
            {!! App\Widgets\Member::list($brand, 'teacher') !!}
        </div>
        
        <div class="p3">
            <h3 class="title">客服团队</h3>
            <img src="/imgs/qtds/kefu.jpg{{ $STATIC_VERSION }}" alt="客服"/>
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