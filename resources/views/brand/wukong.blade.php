@extends('layouts.main')

@section('title', trans('brand.' . $brand))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/qtds.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main">
    
    {!! \App\Helpers\WidgetHelper::banner('wukong') !!}
    
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
                <video id="my-video" class="video-js" controls preload="auto" width="740" height="400" poster="/util/videojs/m.png" data-setup="{}">
                    <source src="/imgs/video/brand.mp4" type="video/mp4">
                </video>
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
            <ul class="userBox">
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/01.jpg{{ $STATIC_VERSION }}" alt="杨帆"/>
                        <div class="mark">
                            <h3 class="title">杨帆</h3>
                            <p class="info">总执行助理︱齐天大圣总经办</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/02.jpg{{ $STATIC_VERSION }}" alt="詹超鹏"/>
                        <div class="mark">
                            <h3 class="title">詹超鹏</h3>
                            <p class="info">经理︱齐天大圣总经办</p>
                        </div>
                    </a>
                </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/03.jpg{{ $STATIC_VERSION }}" alt="赵春桥"/>
                    <div class="mark">
                        <h3 class="title">赵春桥</h3>
                        <p class="info">总教练︱齐天大圣总经办</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/04.jpg{{ $STATIC_VERSION }}" alt="熊梅娥"/>
                    <div class="mark">
                        <h3 class="title">熊梅娥</h3>
                        <p class="info">客服总监︱齐天大圣总经办</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/05.jpg{{ $STATIC_VERSION }}" alt="陶慰"/>
                    <div class="mark">
                        <h3 class="title">陶慰</h3>
                        <p class="info">教研员︱齐天大圣总经办</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/06.jpg{{ $STATIC_VERSION }}" alt="丁力"/>
                    <div class="mark">
                        <h3 class="title">丁力</h3>
                        <p class="info">区域馆长</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/07.jpg{{ $STATIC_VERSION }}" alt="贾诗涵"/>
                    <div class="mark">
                        <h3 class="title">贾诗涵</h3>
                        <p class="info">区域馆长</p>
                    </div>
                </a>
            </li>
                <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/08.jpg{{ $STATIC_VERSION }}" alt="肖烈斯"/>
                    <div class="mark">
                        <h3 class="title">肖烈斯</h3>
                        <p class="info">区域馆长</p>
                    </div>
                </a>
            </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/09.jpg{{ $STATIC_VERSION }}" alt="骆心"/>
                        <div class="mark">
                            <h3 class="title">骆心</h3>
                            <p class="info">区域馆长</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/10.jpg{{ $STATIC_VERSION }}" alt="万江山"/>
                        <div class="mark">
                            <h3 class="title">万江山</h3>
                            <p class="info">区域馆长</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/11.jpg{{ $STATIC_VERSION }}" alt="姚志冲"/>
                        <div class="mark">
                            <h3 class="title">姚志聪</h3>
                            <p class="info">区域馆长</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        
        <!--教练团队-->
        {!! App\Helpers\WidgetHelper::members($brand, 'teacher') !!}
        
        <div class="p3">
            <h3 class="title">客服团队</h3>
            <img src="/imgs/qtds/kefu.jpg{{ $STATIC_VERSION }}" alt="客服"/>
        </div>
    </section>
</article>
@endsection

@section('style')
    <link href="{{ asset(elixir('util/videojs/video-js.css')) }}{{ $STATIC_VERSION }}" rel="stylesheet" />
@endsection

@section('script')
<script src="{{ asset(elixir('util/videojs/video.min.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript">
var myPlayer = videojs('my-video');
videojs("my-video").ready(function(){
    var myPlayer = this;
    myPlayer.play();
});
</script>

@endsection