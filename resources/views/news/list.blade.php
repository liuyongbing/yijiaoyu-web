@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="css/news.css" />
@endsection

@section('content')
<article class="main">
    <!--banner-->
    <section class="banner swiper-container">
        <ul class="bannerUl swiper-wrapper">
            <li class="item swiper-slide"><a href="javascript:;" target="_blank"><img src="imgs/banners/abBanner.jpg" alt="01"></a></li>
        </ul>
        <div class="swiper-pagination banner_slider"></div>
        <div class=" icon-prev icon">  </div>
        <div class=" icon-next icon">  </div>
    </section>
    <!--banner End-->
    <section class="searchBox">
       <div class="yearSelect">
           <div class="inputBox">
            <input type="text" placeholder="年份" readonly/>
            <span class="icon icon_bottom"></span>
           </div>
           <ul class="selectList">
               <li class="item" id="0"><a href="javascript:;">选择全部</a></li>
               <li class="item" id="1"><a href="javascript:;">2018年</a></li>
               <li class="item" id="2"><a href="javascript:;">2017年</a></li>
               <li class="item" id="3"><a href="javascript:;">2016年</a></li>
           </ul>
       </div>
        <div class="calSelect">
            <div class="inputBox">
                <input type="text" placeholder="分类" readonly/>
                <span class="icon icon_bottom"></span>
            </div>
            <ul class="selectList">
                <li class="item" id="01"><a href="javascript:;">齐天大圣跆拳道</a></li>
                <li class="item" id="02"><a href="javascript:;">口袋猫舞蹈</a></li>
                <li class="item" id="03"><a href="javascript:;">童画镇美术</a></li>
                <li class="item" id="04"><a href="javascript:;">学会玩轮滑</a></li>
                <li class="item" id="05"><a href="javascript:;">小虎队篮球</a></li>
                <li class="item" id="06"><a href="javascript:;">小虎队足球</a></li>
            </ul>
        </div>
         <button type="button" class="searchBtn">搜索<span class="icon icon_search"></span></button>
    </section>
    <section class="newsList ">
        <div class="dataShow">
        <ul class="newsUl" id="newslistBox">
            <li class="item">
                <a href="javascript:;">
                    <div class="img">
                        <img src="imgs/news/newsImg.png" alt="item"/>
                    </div>
                    <div class="newsinfo">
                        <h3 class="title">【三亚之旅】没有观世界，哪来的世界观！！！</h3>
                        <p class="info">8月16号上午9点第一批前往三亚旅行老师们已经达到了天河机场很多老师都没有去过一路上都很兴奋相信这段三亚之旅
                            有大家在肯定会过的很愉快8月16号上午9点第一批前往三亚旅行老师们已经达到了天河机场很多老师都没有去过一路上都很兴奋相信这段三亚之旅
                            有大家在肯定会过的很愉快8月16号上午9点第一批前往三亚旅行老师们已经达到了天河机场很多老师都没有去过一路上都很兴奋相信这段三亚之旅
                    有大家在肯定会过的很愉快8月16号上午9点第一批前往三亚旅行老师们已经达到了天河机场很多老师都没有去过一路上都很兴奋相信这段三亚之旅
                            有大家在肯定会过的很愉快8月16号上午9点第一批前往三亚旅行老师们已经达到了天河机场很多老师都没有去过一路上都很兴奋相信这段三亚之旅
							  有大家在肯定会过的很愉快8月16号上午9点第一批前往三亚旅行老师们已经达到了天河机场很多老师都没有去过一路上都很兴奋相信这段三亚之旅
                            有大家在肯定会过的很愉快8月16号上午9点第一批前往三亚旅行老师们已经达到了天河机场很多老师都没有去过一路上都很兴奋相信这段三亚之旅
                           </p>
                        <span class="date">2018年10月22日</span>
                    </div>

                </a>
            </li>

            <li class="item">
                <a href="javascript:;">
                    <div class="img">
                        <img src="imgs/news/newsImg.png" alt="item"/>
                    </div>
                    <div class="newsinfo">
                        <h3 class="title">【三亚之旅】没有观世界，哪来的世界观！！！</h3>
                        <p class="info">8月16号上午9点第一批前往三亚旅行老师们已经达到了天河机场很多老师都没有去过一路上都很兴奋相信这段三亚之旅
                            有大家在肯定会过的很愉快</p>
                        <span class="date">2018年10月22日</span>
                    </div>

                </a>
            </li>

            <li class="item">
                <a href="javascript:;">
                    <div class="img">
                        <img src="imgs/news/newsImg.png" alt="item"/>
                    </div>
                    <div class="newsinfo">
                        <h3 class="title">【三亚之旅】没有观世界，哪来的世界观！！！</h3>
                        <p class="info">8月16号上午9点第一批前往三亚旅行老师们已经达到了天河机场很多老师都没有去过一路上都很兴奋相信这段三亚之旅
                            有大家在肯定会过的很愉快</p>
                        <span class="date">2018年10月22日</span>
                    </div>

                </a>
            </li>

            <li class="item">
                <a href="javascript:;">
                    <div class="img">
                        <img src="imgs/news/newsImg.png" alt="item"/>
                    </div>
                    <div class="newsinfo">
                        <h3 class="title">【三亚之旅】没有观世界，哪来的世界观！！！</h3>
                        <p class="info">8月16号上午9点第一批前往三亚旅行老师们已经达到了天河机场很多老师都没有去过一路上都很兴奋相信这段三亚之旅
                            有大家在肯定会过的很愉快</p>
                        <span class="date">2018年10月22日</span>
                    </div>

                </a>
            </li>
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