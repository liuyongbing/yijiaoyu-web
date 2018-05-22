@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="css/about.css" />
@endsection

@section('content')
<article class="main about_main">
    
    @include('include.banner')
    
    <!-- bannerBottom -->
    <section class="ab_BannerBottom">
        <a href="javascript:;">
        <img src="imgs/about/ab01.png" alt="50"/>
        </a>
        <a href="javascript:;">
        <img src="imgs/about/ab02.png" alt="240"/>
        </a>
        <a href="javascript:;">
        <img src="imgs/about/ab03.png" alt="1000"/>
        </a>
    </section>
    <!-- bannerBottom End-->
    <!-- 集团文化-->
    <section class="ab_group">
      <h3 class="title">
          集团文化
          <span class="title_p">
                <img src="imgs/about/jtwh.png" alt="集团文化"/>
          </span>
      </h3>
       <div class="groupImgs">
           <a href="javascript:;">
             <img src="imgs/about/ab06.png" alt="企业理念"/>
           </a>
           <a href="javascript:;">
              <img src="imgs/about/ab05.png" alt="企业愿景"/>
           </a>
           <a href="javascript:;">
           <img src="imgs/about/ab06.png" alt="企业口号"/>
           </a>
           <a href="javascript:;">
           <img src="imgs/about/ab07.png" alt="核心价值"/>
           </a>
       </div>
    </section>
    <!-- 集团文化 End -->
    <!-- 品牌文化-->
    <section class="ab_brand">
        <h3 class="title">
            品牌文化
            <span class="title_p">
                <img src="imgs/about/ppwh.png" alt="品牌文化"/>
            </span>
        </h3>
        <div class="brandImgs">
            <a href="javascript:;">
                <img src="imgs/about/mid.png" alt="mid"/>
            </a>
        </div>
    </section>
    <!--品牌文化 End-->
    <!-- 品牌展示-->
    <section class="ab_brandShow">
        <h3 class="title">
            品牌展示
            <span class="title_p">
                <img src="imgs/about/ppzs.png" alt="品牌展示"/>
            </span>
        </h3>
        <div class="brandImgs">
            <a href="javascript:;">
            <img src="imgs/about/taiquandao.png" alt="跆拳道"/>
            </a>
            <a href="javascript:;">
            <img src="imgs/about/dance.png" alt="舞蹈"/>
            </a>
            <a href="javascript:;">
            <img src="imgs/about/meishu.png" alt="美术"/>
            </a>
            <a href="javascript:;">
            <img src="imgs/about/lunhua.png" alt="轮滑"/>
            </a>
            <a href="javascript:;">
            <img src="imgs/about/basketball.png" alt="篮球"/>
            </a>
            <a href="javascript:;">
            <img src="imgs/about/footerball.png" alt="足球"/>
            </a>
        </div>
    </section>
    <!-- 品牌展示 End-->
</article>
@endsection