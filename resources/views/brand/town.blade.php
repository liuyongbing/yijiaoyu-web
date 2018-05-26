@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/qtds.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main">
    <!--banner-->
    <section class="banner swiper-container">
        <ul class="bannerUl swiper-wrapper">
            <li class="item swiper-slide">
               <img src="/imgs/banners/indexBanner02.jpg" alt="01">
           </li>
        </ul>
        <div class="swiper-pagination banner_slider"></div>
        <div class=" icon-prev icon">  </div>
        <div class=" icon-next icon">  </div>
    </section>
    <!--banner End-->
    <!-- -->
    <section class="brand_center" id="brands_tab">
        <div class="title_tab">
            <a href="javascript:;" class="tab active">企业品牌</a>
            <a href="javascript:;" class="tab">课程品牌</a>
            <a href="javascript:;" class="tab">人物品牌</a>
            <a href="javascript:;" class="joinUs">加入我们</a>
        </div>
    </section>
    
 </article>
@endsection

@section('script')
<script src="{{ asset(elixir('js/brands.js')) }}{{ $STATIC_VERSION }}"></script>
@endsection