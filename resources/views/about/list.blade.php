@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/about.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main about_main">
    
    @include('include.banner')
    
    <!-- bannerBottom -->
    <section class="ab_BannerBottom" id="group_introduction">
        <a href="javascript:;">
        <img src="imgs/about/ab01.jpg{{ $STATIC_VERSION }}" alt=""/>
        </a>
        <a href="javascript:;">
        <img src="imgs/about/ab02.jpg{{ $STATIC_VERSION }}" alt=""/>
        </a>
        <a href="javascript:;">
        <img src="imgs/about/ab03.jpg{{ $STATIC_VERSION }}" alt=""/>
        </a>
    </section>
    <!-- bannerBottom End-->
    <!-- 集团文化-->
    <section class="ab_group" id="group_culture">
        <h3 class="title">
            集团文化
            <span class="title_p">
                <img src="imgs/about/jtwh.png{{ $STATIC_VERSION }}" alt="集团文化"/>
            </span>
        </h3>
        <div class="groupImgs">
            <a href="javascript:;">
                <img src="imgs/about/ab04.png{{ $STATIC_VERSION }}" alt="企业理念"/>
            </a>
            <a href="javascript:;">
                <img src="imgs/about/ab05.png{{ $STATIC_VERSION }}" alt="企业愿景"/>
            </a>
            <a href="javascript:;">
                <img src="imgs/about/ab06.png{{ $STATIC_VERSION }}" alt="企业口号"/>
            </a>
            <a href="javascript:;">
                <img src="imgs/about/ab07.png{{ $STATIC_VERSION }}" alt="核心价值"/>
            </a>
        </div>
    </section>
    <!-- 集团文化 End -->
    <!-- 品牌文化-->
    <section class="ab_brand" id="brand_culture">
        <h3 class="title">
            品牌文化
            <span class="title_p">
                <img src="imgs/about/ppwh.png{{ $STATIC_VERSION }}" alt="品牌文化"/>
            </span>
        </h3>
        <div class="brandImgs">
            <a href="javascript:;">
                <img src="imgs/about/brand_culture.jpg{{ $STATIC_VERSION }}" alt="品牌文化"/>
            </a>
        </div>
    </section>
    <!--品牌文化 End-->
    <!-- 品牌展示-->
    <section class="ab_brandShow" id="brand_list">
        <h3 class="title">
            品牌展示
            <span class="title_p">
                <img src="imgs/about/ppzs.png{{ $STATIC_VERSION }}" alt="品牌展示"/>
            </span>
        </h3>
        <div class="brandImgs">
            <a href="javascript:;">
            <img src="imgs/about/taiquandao.png{{ $STATIC_VERSION }}" alt="跆拳道"/>
            </a>
            <a href="javascript:;">
            <img src="imgs/about/dance.png{{ $STATIC_VERSION }}" alt="舞蹈"/>
            </a>
            <a href="javascript:;">
            <img src="imgs/about/meishu.png{{ $STATIC_VERSION }}" alt="美术"/>
            </a>
            <a href="javascript:;">
            <img src="imgs/about/lunhua.png{{ $STATIC_VERSION }}" alt="轮滑"/>
            </a>
            <a href="javascript:;">
            <img src="imgs/about/basketball.png{{ $STATIC_VERSION }}" alt="篮球"/>
            </a>
            <a href="javascript:;">
            <img src="imgs/about/footerball.png{{ $STATIC_VERSION }}" alt="足球"/>
            </a>
        </div>
    </section>
    <!-- 品牌展示 End-->
</article>
@endsection