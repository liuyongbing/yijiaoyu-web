@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('content')
<article class="main">
    <section class="banner swiper-container">
        <ul class="bannerUl swiper-wrapper">
            <li class="item swiper-slide">
                <a href="{{ route('about.index') }}">
                    <img src="imgs/banners/indexBanner03.jpg{{ $STATIC_VERSION }}" alt="03">
                </a>
            </li>
            <!--li class="item swiper-slide">
                <a href="javascript:;" target="_blank">
                    <img src="imgs/banners/indexBanner02.jpg{{ $STATIC_VERSION }}" alt="02">
                </a>
            </li-->
            <li class="item swiper-slide">
                <a href="http://music.163.com/#/song?id=556062363" target="_blank">
                    <img src="imgs/banners/indexBanner01.jpg{{ $STATIC_VERSION }}" alt="01">
                </a>
            </li>
        </ul>
        <div class="swiper-pagination banner_slider"></div>
        <div class=" icon-prev icon">  </div>
        <div class=" icon-next icon">  </div>
    </section>
</article>
@endsection