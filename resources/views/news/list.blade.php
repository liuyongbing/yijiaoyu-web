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
            <input type="text" placeholder="年份" readonly />
            <span class="icon icon_bottom"></span>
           </div>
           <ul class="selectList">
               <li class="item" id="0"><a href="javascript:;">选择全部</a></li>
               @foreach($years as $year)
               <li class="item" id="1"><a href="javascript:;">{{ $year }}年</a></li>
               @endforeach
           </ul>
       </div>
        <div class="calSelect">
            <div class="inputBox">
                <input type="text" placeholder="分类" readonly/>
                <span class="icon icon_bottom"></span>
            </div>
            <ul class="selectList">
            @foreach($categories as $cate)
                <li class="item" id="01"><a href="javascript:;">{{ $cate['title'] }}</a></li>
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