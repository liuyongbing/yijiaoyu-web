@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/boss.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main bossMain">
    
    @include('include.banner')
    
    <!-- 刘洋 -->
    <section class="boss bo_ly">
        <div class="box" id="chairman">
            <a href="javascript:;" class="left ">
                <img src="imgs/boss/liuyang.png{{ $STATIC_VERSION }}" alt="liuyang"/>
            </a>
            <a href="javascript:;" class="right ">
                <img src="imgs/boss/liuyangImg.png{{ $STATIC_VERSION }}" alt="liuyang"/>
            </a>
        </div>
    </section>
    <!-- 刘洋 End-->
    <!-- 博伟 -->
    <section class="boss bo_dw ">
        <div class="box" id="ceo">
            <a href="javascript:;" class="left ">
                <img src="imgs/boss/dongweiImg.png{{ $STATIC_VERSION }}" alt="dongwei"/>
            </a>
            <a href="javascript:;" class="right ">
                <img src="imgs/boss/dongwei.png{{ $STATIC_VERSION }}" alt="dongwei"/>
            </a>
        </div>
    </section>
    <!--博伟 End-->
</article>
@endsection