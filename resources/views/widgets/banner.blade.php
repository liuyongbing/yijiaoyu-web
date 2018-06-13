@if (!empty($banners))
    <section class="banner swiper-container">
        <ul class="bannerUl swiper-wrapper">
        @foreach($banners as $banner)
            <li class="item swiper-slide">
            @if (!empty($banner['url']))
                <a href="{{ $banner['url'] }}" target="{{ $banner['target'] }}">
                    <img src="{{ $banner['image_url'] }}{{ $STATIC_VERSION }}" alt="{{ $banner['title'] }}" />
                </a>
            @else
                <img src="{{ $banner['image_url'] }}{{ $STATIC_VERSION }}" alt="{{ $banner['title'] }}" />
            @endif
            </li>
        @endforeach
        </ul>
        <div class="swiper-pagination banner_slider"></div>
        <div class=" icon-prev icon">  </div>
        <div class=" icon-next icon">  </div>
    </section>
@endif