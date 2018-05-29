@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/news.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main">
    
    @include('include.banner')
    
    <section class="searchBox">
        <div class="yearSelect">
            <div class="inputBox">
                <input type="text" name="year" placeholder="年份" value="{{ isset($filters['show_year']) ? $filters['show_year'] : '' }}"  data-id="{{ isset($filters['show_year']) ? $filters['show_year'] : '' }}" readonly />
                <span class="icon icon_bottom"></span>
            </div>
            <ul class="selectList">
                <li class="item"><a href="javascript:;" data-id="0">选择全部</a></li>
                @foreach($years as $year)
                <li class="item"><a href="javascript:;" data-id="{{ $year }}">{{ $year }}年</a></li>
                @endforeach
            </ul>
        </div>
        <div class="calSelect">
            <div class="inputBox">
                <input type="text" name="category_id" placeholder="分类" value="{{ isset($categories[$filters['category_id']]) ? $categories[$filters['category_id']]['title'] : ''}}" data-id="{{ isset($filters['category_id']) ? $filters['category_id'] : ''}}" readonly />
                <span class="icon icon_bottom"></span>
            </div>
            <ul class="selectList">
            @foreach($categories as $cate)
                <li class="item"><a href="javascript:;" data-id="{{ $cate['id'] }}">{{ $cate['title'] }}</a></li>
            @endforeach
            </ul>
        </div>
         <button type="button" class="searchBtn">搜索<span class="icon icon_search"></span></button>
    </section>
    <section class="newsList ">
        <div class="dataShow">
        <ul class="newsUl" id="newslistBox">
        @foreach($items as $item)
            <li class="item">
                <a href="{{ route('news.show', ['id' => $item['id']]) }}">
                    <div class="img">
                        <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}"/>
                    </div>
                    <div class="newsinfo">
                        <h3 class="title">{{ $item['title'] }}</h3>
                        <p class="info">{{ $item['summary'] }}</p>
                        <span class="date">{{ date('Y年n月j日', strtotime($item['created_at'])) }}</span>
                    </div>
                </a>
            </li>
        @endforeach
        </ul>
        <div class="pagination">
            <ul class="paginationUl">
                <li class="item"><a href="javascript:;">上一页</a></li>
                <li class="item"><a href="javascript:;">1</a></li>
                <li class="item"><a href="javascript:;">2</a></li>
                <li class="item"><a href="javascript:;">3</a></li>
                <li class="item"><a href="javascript:;">4</a></li>
                <li class="item"><a href="javascript:;">5</a></li>
                <li class="item"><a href="javascript:;">下一页</a></li>
                <li class="item"><a href="javascript:;">末页</a></li>
            </ul>
        </div>
        </div>
        <div class="noData">暂时没有相关资讯哦~</div>
    </section>
</article>
@endsection

@section('script')
<script type="text/javascript">
$(function() {
    var route = "{{ route('news.index') }}";
    $('.searchBtn').click(function() {
        var year = $('input[name="year"]').attr('data-id');
        var category_id = $('input[name="category_id"]').attr('data-id');
        
        route =  route + '?year=' + year;
        route =  route + '&category_id=' + category_id;
        
        window.location.href = route;
    });
});
</script>
@endsection