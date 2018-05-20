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
      <span class="info">宜昌校区</span><span class="date">2011年8月21日</span>
  </div>
    <div class="newsCenter">
        <ul class="newsUl">
            <li class="item">
                <h3 class="title">空间发色个个</h3>
                <div class="news_detail">
                    <p>齐天大圣跆拳道教育集团成立于2011年，是经过湖北省体育局体教部门审批的正规培训场所。规模庞大，师资力量雄厚，机构教练均由本科院校跆拳道专业毕业，专业技能过硬，是湖北省内具有晋级资历的专业跆拳道馆，是全国跆拳道行业中崛起的标杆。</p>
                    <img src="/imgs/news/detail.jpg" alt="detail"/>
                    <p>齐天大圣跆拳道教育集团成立于2011年，是经过湖北省体育局体教部门审批的正规培训场所。规模庞大，师资力量雄厚，机构教练均由本科院校跆拳道专业毕业，专业技能过硬，是湖北省内具有晋级资历的专业跆拳道馆，是全国跆拳道行业中崛起的标杆。</p>
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