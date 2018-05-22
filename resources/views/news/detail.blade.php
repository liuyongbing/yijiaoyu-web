@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/newsDetail.css')) }}" />
@endsection

@section('content')
<article class="main newsDetail">
    <!--banner-->
    <section class="banner swiper-container">
        <ul class="bannerUl swiper-wrapper">
            <li class="item swiper-slide"><a href="javascript:;" target="_blank"><img src="/imgs/banners/abBanner.jpg" alt="01"></a></li>
        </ul>
        <div class="swiper-pagination banner_slider"></div>
        <div class=" icon-prev icon">  </div>
        <div class=" icon-next icon">  </div>
    </section>
    <!--banner End-->
    <section class="detail_content">
        <div class="infoShow">
          <span class="info">宜昌校区</span>
          <span class="date">{{ date('Y年n月j日', strtotime($detail['created_at'])) }}</span>
        </div>
        <div class="newsCenter">
            <ul class="newsUl">
                <li class="item">
                    <h3 class="title">{{ $detail['title'] }}</h3>
                    <div class="news_detail">
                        <p>{{ htmlspecialchars($detail['content'], ENT_HTML401) }}</p>
                    </div>
                </li>
            </ul>
            <button type="button" class="blackBtn">返回</button>
            <div class="pagination">
                <ul class="pagUl">
                    <li class="item">上一篇：<a href="javascript:;">每次可偶尔间</a></li>
                    <li class="item">下一篇：<a href="javascript:;">你的飞碟</a></li>
                </ul>
            </div>
        </div>
    </section>
</article>
@endsection