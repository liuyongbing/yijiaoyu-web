@extends('layouts.main')

@section('title', trans('brand.' . $brand))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/qtds.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main fabletown_main">
    <!--banner-->
    <section class="banner swiper-container">
        <ul class="bannerUl swiper-wrapper">
            <li class="item swiper-slide">
                <img src="/imgs/banners/banner_town.jpg{{ $STATIC_VERSION }}" alt="01">
            </li>
        </ul>
        <div class="swiper-pagination banner_slider"></div>
        <div class=" icon-prev icon">  </div>
        <div class=" icon-next icon">  </div>
    </section>
    <!--banner End-->
    <!-- -->
    <section class="brand_center thz_center" id="brands_tab">
        <div class="title_tab">
            <a href="javascript:;" class="tab active">企业品牌</a>
            <a href="javascript:;" class="tab">课程品牌</a>
            <a href="javascript:;" class="tab">人物品牌</a>
            <a href="javascript:;" class="joinUs tab">加入我们</a>
        </div>
    </section>
    <section class="com_brand main_brand thz_brand" >
        <div class="p1">
            <h3 class="title">童画镇创意守护孩子的艺术天赋</h3>
            <img src="/imgs/fabletwon/p101.jpg{{ $STATIC_VERSION }}" alt="童话镇" class="童话镇"/>
        </div>
        <div class="p3">
            <a href="javascript:;">
                <img src="/imgs/fabletwon/thz02.jpg{{ $STATIC_VERSION }}" alt="02"/>
            </a>
        </div>
        <div class="p3">
            <h3 class="title">品牌理念</h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/p103.jpg{{ $STATIC_VERSION }}" alt="p103"/>
            </a>
        </div>
    </section>
    <section class="self_brand main_brand thz_self_brand">
        <div class="p1">
            <h3 class="title">核心概念</h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/classp01.png{{ $STATIC_VERSION }}" alt="核心"/>
            </a>
        </div>
        <div class="p2 ta_p2">
            <h3 class="title">交流过程<p>6步推进法，全面建立孩子的创造力思维系统。</p></h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/chassp02.png{{ $STATIC_VERSION }}" alt="class"/>
            </a>
        </div>
        <div class="p3">
            <h3 class="title">引导原则<p>4个阶段，守护每个孩子本真的艺术天赋。</p></h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/classp03.png{{ $STATIC_VERSION }}" alt="class"/>
            </a>
        </div>
        <div class="p3">
            <h3 class="title">课程主轴<p>发掘生活细节，链接人文知识，归纳艺术概念。</p></h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/classp04.png{{ $STATIC_VERSION }}" alt="class"/>
            </a>
        </div>
        <div class="p4 ta_p2">
            <h3 class="title">课程体系<p>对应各个年龄段的心智基础，螺旋进阶式开展适龄、适合的课程。</p></h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/classp05.jpg{{ $STATIC_VERSION }}" alt="class"/>
            </a>
        </div>
    </section>
    <section class="user_brand main_brand">
        <div class="p1">
            <h3 class="title">管理团队</h3>
            <ul class="userBox">
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person01/01.jpg{{ $STATIC_VERSION }}" alt="王友源"/>
                        <div class="mark">
                            <h3 class="title">王友源</h3>
                            <p class="info">集团总经理︱童画镇总经办︱集团部门经理</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person01/02.jpg{{ $STATIC_VERSION }}" alt="罗雨"/>
                        <div class="mark">
                            <h3 class="title">罗雨</h3>
                            <p class="info">集团总经理︱童画镇总经办</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person01/03.jpg{{ $STATIC_VERSION }}" alt="李梦竹"/>
                        <div class="mark">
                            <h3 class="title">李梦竹</h3>
                            <p class="info">童画镇总经办</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person01/04.jpg{{ $STATIC_VERSION }}" alt="李程遥"/>
                        <div class="mark">
                            <h3 class="title">李程遥</h3>
                            <p class="info">童画镇总经办</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person01/05.jpg{{ $STATIC_VERSION }}" alt="王鑫鑫"/>
                        <div class="mark">
                            <h3 class="title">王鑫鑫</h3>
                            <p class="info">五一广场馆馆长</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person01/06.jpg{{ $STATIC_VERSION }}" alt="鄢志葳"/>
                        <div class="mark">
                            <h3 class="title">鄢志葳</h3>
                            <p class="info">运河佳苑馆馆长︱艺彩330馆长</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person01/07.jpg{{ $STATIC_VERSION }}" alt="龚大成"/>
                        <div class="mark">
                            <h3 class="title">龚大成</h3>
                            <p class="info">中南路峰景馆馆长</p>
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
                        <img src="/imgs/fabletwon/person02/01.jpg{{ $STATIC_VERSION }}" alt="余君"/>
                        <div class="mark">
                            <h3 class="title">余君</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/02.jpg{{ $STATIC_VERSION }}" alt="何莉"/>
                        <div class="mark">
                            <h3 class="title">何莉</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/03.jpg{{ $STATIC_VERSION }}" alt="黄陆路"/>
                        <div class="mark">
                            <h3 class="title">黄陆路</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/04.jpg{{ $STATIC_VERSION }}" alt="邢茹月"/>
                        <div class="mark">
                            <h3 class="title">邢茹月</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/05.jpg{{ $STATIC_VERSION }}" alt="龚建霞"/>
                        <div class="mark">
                            <h3 class="title">龚建霞</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/06.jpg{{ $STATIC_VERSION }}" alt="张俭"/>
                        <div class="mark">
                            <h3 class="title">张俭</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/07.jpg{{ $STATIC_VERSION }}" alt="宋宝杏"/>
                        <div class="mark">
                            <h3 class="title">宋宝杏</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/08.jpg{{ $STATIC_VERSION }}" alt="余南洁"/>
                        <div class="mark">
                            <h3 class="title">余南洁</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/09.jpg{{ $STATIC_VERSION }}" alt="龚欢欢"/>
                        <div class="mark">
                            <h3 class="title">龚欢欢</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/10.jpg{{ $STATIC_VERSION }}" alt="吴爽"/>
                        <div class="mark">
                            <h3 class="title">吴爽</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/11.jpg{{ $STATIC_VERSION }}" alt="艾芷珂"/>
                        <div class="mark">
                            <h3 class="title">艾芷珂</h3>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/fabletwon/person02/12.jpg{{ $STATIC_VERSION }}" alt="毛敬仪"/>
                        <div class="mark">
                            <h3 class="title">毛敬仪</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="p3 clear">
            <!--h3 class="title">客服团队</h3>
            <img src="/imgs/qtds/kefu.jpg{{ $STATIC_VERSION }}" alt="客服"/-->
        </div>
    </section>
    <section class="joinUs_brand  main_brand">
         <div class="p1">
             <img src="/imgs/fabletwon/p1.jpg{{ $STATIC_VERSION }}" alt="01"/>
         </div>
        <div class="p2">
            <div class="imgbox">
            <img src="/imgs/fabletwon/p3.png{{ $STATIC_VERSION }}" alt="02"/>
            </div>
        </div>
        <div class="joinus_from">
            <h3 class="top">
                <a href="javascript:;">留言咨询 <span class="icon"></span></a>
                <a href="javascript:;">0717-6232880</a>
                <span>如果你对此项目感兴趣，请留言，获取更多的加盟资料！</span>
            </h3>
            <div class="formBox">
          <div class="left fl">
              <dl class="arrowClass">
                    <dd>留言咨询</dd>
                    <dd>等待回访</dd>
                    <dd>签约合作</dd>
              </dl>
          </div>
            <div class="right fr">
                <div class="input_group">
                <div class="input_box">
                    <label>姓名:</label>
                    <input type="text" placeholder="真实姓名"/>
                </div>
                <div class="input_box">
                    <label>手机:</label>
                    <input type="tel" placeholder="请填写手机号"/>
                </div>
                <div class="input_box">
                    <label>预算:</label>
                    <select>
                        <option>请选择投资额</option>
                        <option>50-100万</option>
                        <option>110-200万</option>
                        <option>210-300万</option>
                        <option>300万以上</option>
                    </select>
                </div>
                <div class="input_box address">
                    <label>地区:</label>
                    <select>
                        <option value="">省/市</option>
                    </select>
                    <select>
                        <option value="">地/州</option>
                    </select>
                    <select>
                        <option value="">区县</option>
                    </select>
                    <input type="text" placeholder="请输入完整信息">
                </div>
                <div class="input_box">
                    <label>内容:</label>
                   <textarea></textarea>
                </div>
               <div class="input_box checkBox">
                   <input type="checkbox"/>
                   <span>我已阅读并同意 <a href="javascript:;"> 《全球加盟网络服务条款》 </a> </span>
               </div>
                <button type="button" class="submit">提交留言</button>
            </div>
            </div>
        </div>
        </div>
    </section>
</article>
@endsection

@section('script')
<script src="{{ asset(elixir('js/brands.js')) }}{{ $STATIC_VERSION }}"></script>
@endsection