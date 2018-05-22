@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/newsDetail.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main newsDetail">
    
    @include('include.banner')
    
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
                        <p>{!! $detail['content']!!}</p>
                    </div>
                </li>
            </ul>
            <button type="button" class="blackBtn">返回</button>
            <div class="pagination">
                <ul class="pagUl">
                @if (!empty($previous))
                    <li class="item">上一篇：<a href="{{ route('news.show', ['id' => $previous['id']]) }}">{{ $previous['title'] }}</a></li>
                @endif
                @if (!empty($next))
                    <li class="item">下一篇：<a href="{{ route('news.show', ['id' => $next['id']]) }}">{{ $next['title'] }}</a></li>
                @endif
                </ul>
            </div>
        </div>
    </section>
</article>
@endsection