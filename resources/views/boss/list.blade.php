@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="css/boss.css" />
@endsection

@section('content')
<article class="main bossMain">
    
    @include('include.banner')
    
    <!-- 刘洋 -->
   <section class="boss bo_ly">
       <div class="box">
       <a href="javascript:;" class="left ">
           <img src="imgs/boss/liuyang.png" alt="liuyang"/>
       </a>
       <a href="javascript:;" class="right ">
           <img src="imgs/boss/liuyangImg.png" alt="liuyang"/>
       </a>
       </div>
   </section>
    <!-- 刘洋 End-->
    <!-- 博伟 -->
    <section class="boss bo_dw ">
        <div class="box">
        <a href="javascript:;" class="left ">
            <img src="imgs/boss/dongweiImg.png" alt="dongwei"/>
        </a>
        <a href="javascript:;" class="right ">
            <img src="imgs/boss/dongwei.png" alt="dongwei"/>
        </a>
        </div>
    </section>
    <!--博伟 End-->
</article>
@endsection