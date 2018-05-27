@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/qtds.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main">
    <!--banner-->
    <section class="banner swiper-container">
        <ul class="bannerUl swiper-wrapper">
            <li class="item swiper-slide"><a href="javascript:;" target="_blank"><img src="/imgs/banners/indexBanner02.jpg" alt="01"></a></li>
        </ul>
        <div class="swiper-pagination banner_slider"></div>
        <div class=" icon-prev icon">  </div>
        <div class=" icon-next icon">  </div>
    </section>
    <!--banner End-->
    <!-- -->
    <section class="brand_center kdm_center" id="brands_tab">
        <div class="title_tab">
            <a href="javascript:;" class="tab active">企业品牌</a>
            <a href="javascript:;" class="tab">课程品牌</a>
            <a href="javascript:;" class="tab">人物品牌</a>
            <a href="javascript:;" class="joinUs">加入我们</a>
        </div>
    </section>
    <section class="com_brand main_brand kdm_brand" >
        <div class="p1">
            <img src="/imgs/kdm/logo.png" alt="口袋猫" class="logo"/>
            <p class="info">
                我们是优雅的缔造者，<br/>
                我们是生命的设计师，<br/>
                我们更是口袋猫的一员。<br/>
                我们怀揣着满腔的热血，<br/>
                用创造与奉献打造企业新品牌，<br/>
                以专业和服务主导舞蹈大市场，<br/>
                让青春与活力散发光热，<br/>
                用智慧和汗水创造价值。
            </p>
        </div>
        <div class="p2">
            <a href="javascript:;">
                <img src="/imgs/kdm/li01.jpg" alt="01"/>
            </a>
            <a href="javascript:;">
                <img src="/imgs/kdm/li02.jpg" alt="240"/>
            </a>
            <a href="javascript:;">
                <img src="/imgs/kdm/li03.jpg" alt="1000"/>
            </a>
        </div>
        <div class="p3">
            <h2 class="title">我们是优雅的缔造者，我们是生命的设计师</h2>
            <div class="info">
                <img src="/imgs/kdm/ban002.jpg" alt="教学方式"/>
        </div>
        </div>
        <div class="p4">
            <img src="/imgs/kdm/fzlc.png" alt="发展历程"/>
        </div>
        <div class="p5">
            <h3 class="title">荣誉证书</h3>
            <img src="/imgs/kdm/ry01.jpg" alt="荣誉01"/>
            <img src="/imgs/qtds/ry02.jpg" alt="荣誉02"/>
            <img src="/imgs/kdm/ry03.jpg" alt="荣誉03"/>
        </div>
    </section>
    <section class="self_brand main_brand kdm_self_brand">
        <div class="p1">
            <h3 class="title"><span class="icon"></span>立体教学 <p>以国际视野培养完整儿童</p></h3>
            <a href="javascript:;">
                <img src="/imgs/kdm/p101.png" alt="p101"/>
            </a>
            <img src="/imgs/kdm/ztp101.jpg" alt="zt"/>
        </div>
        <div class="p1">
            <h3 class="title"><span class="icon"></span>体适能舞蹈—能力篇 <p>25项综合核心能力</p></h3>
            <a href="javascript:;">
            <img src="/imgs/qtds/nl.jpg" alt="nl"/>
                <p class="info"><span class="age">3—12</span>岁为各项能力发展<span class="time">黄金时期</span></p>
            </a>
        </div>
        <div class="p2">
            <h3 class="title"><span class="icon"></span>体适能舞蹈—品行篇</h3>
            <a href="javascript:;">
            <img src="/imgs/kdm/px01.png" alt="class"/>
            </a>
        </div>
        <div class="p2">
            <h3 class="title"><span class="icon"></span>体适能舞蹈—技术篇</h3>
            <a href="javascript:;">
                <img src="/imgs/kdm/px02.png" alt="class"/>
            </a>
            <img src="/imgs/kdm/ztp02.jpg" alt="zt"/>
        </div>
        <div class="p3">
            <h3 class="title"><span class="icon"></span>体适能舞蹈—运动营养篇</h3>
            <a href="javascript:;">
            <img src="/imgs/kdm/ll.png" alt="ll"/>
            </a>
        </div>
    </section>
    <section class="user_brand main_brand kdm_user_brand">
        <div class="p1">
            <h3 class="title">管理团队</h3>
            <ul class="userBox kdm_user">
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/kdm/person01/01.jpg" alt="谭简冬"/>
                        <div class="mark">
                            <h3 class="title">谭简冬</h3>
                            <p class="info">集团总经理︱集团部门经理︱口袋猫总经办</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/kdm/person01/02.jpg" alt="杨可儿"/>
                        <div class="mark">
                            <h3 class="title">杨可儿</h3>
                            <p class="info">口袋猫总经办</p>
                        </div>
                    </a>
                </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/kdm/person01/03.jpg" alt="邓萍飞"/>
                    <div class="mark">
                        <h3 class="title">邓萍飞</h3>
                        <p class="info">中国舞技术总监</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/kdm/person01/04.jpg" alt="刘蓉"/>
                    <div class="mark">
                        <h3 class="title">刘蓉</h3>
                        <p class="info">拉丁舞技术总监</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/kdm/person01/05.jpg" alt="李晓雨"/>
                    <div class="mark">
                        <h3 class="title">李晓雨</h3>
                        <p class="info">客服总监</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/kdm/person01/06.jpg" alt="汤立伟"/>
                    <div class="mark">
                        <h3 class="title">汤立伟</h3>
                        <p class="info">区域馆长</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/kdm/person01/07.jpg" alt="陶孟娟"/>
                    <div class="mark">
                        <h3 class="title">陶孟娟</h3>
                        <p class="info">区域馆长</p>
                    </div>
                </a>
            </li>
                <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/kdm/person01/08.jpg" alt="付清雯"/>
                    <div class="mark">
                        <h3 class="title">付清雯</h3>
                        <p class="info">区域馆长</p>
                    </div>
                </a>
            </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/kdm/person01/09.jpg" alt="陈浩然"/>
                        <div class="mark">
                            <h3 class="title">陈浩然</h3>
                            <p class="info">区域馆长</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/kdm/person01/10.jpg" alt="徐露"/>
                        <div class="mark">
                            <h3 class="title">徐露</h3>
                            <p class="info">CBD金缔华城旗舰馆馆长</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/kdm/person01/11.jpg" alt="吴家月"/>
                        <div class="mark">
                            <h3 class="title">吴家月</h3>
                            <p class="info">当阳概念馆馆长</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="p2">
            <h3 class="title">教练团队</h3>
            <ul class="userBox">
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person02/yf01.png" alt="杨帆"/>
                        <div class="mark">
                            <h3 class="title">杨帆</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person02/zcp02.png" alt="詹超鹏"/>
                        <div class="mark">
                            <h3 class="title">詹超鹏</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person02/zcq03.png" alt="赵春桥"/>
                        <div class="mark">
                            <h3 class="title">赵春桥</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person02/xy04.png" alt="肖宇"/>
                        <div class="mark">
                            <h3 class="title">肖宇</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person02/lns05.png" alt="刘南山"/>
                        <div class="mark">
                            <h3 class="title">刘南山</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person02/cml06.png" alt="陈孟龙"/>
                        <div class="mark">
                            <h3 class="title">陈孟龙</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person02/ty07.png" alt="唐宇"/>
                        <div class="mark">
                            <h3 class="title">唐宇</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person02/kk08.png" alt="胡兴太"/>
                        <div class="mark">
                            <h3 class="title">胡兴太</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!--div class="p3"-->
            <!--<h3 class="title">客服团队</h3>-->
            <!--<img src="/imgs/qtds/kefu.jpg" alt="客服"/>-->
        <!--/div-->
    </section>

</article>
@endsection

@section('script')
<script src="{{ asset(elixir('js/brands.js')) }}{{ $STATIC_VERSION }}"></script>
@endsection