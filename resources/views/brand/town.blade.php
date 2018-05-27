@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/qtds.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main fabletown_main">
    <!--banner-->
    <section class="banner swiper-container">
        <ul class="bannerUl swiper-wrapper">
            <li class="item swiper-slide">
                <img src="/imgs/fabletwon/banner.jpg" alt="01">
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
            <img src="/imgs/fabletwon/p101.jpg" alt="童话镇" class="童话镇"/>
        </div>
        <div class="p3">
            <a href="javascript:;">
                <img src="/imgs/fabletwon/thz02.jpg" alt="02"/>
            </a>
        </div>
        <div class="p3">
            <h3 class="title">品牌理念</h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/p103.jpg" alt="p103"/>
            </a>
        </div>
    </section>
    <section class="self_brand main_brand thz_self_brand">
        <div class="p1">
            <h3 class="title">核心概念</h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/classp01.png" alt="核心"/>
            </a>
        </div>
        <div class="p2 ta_p2">
            <h3 class="title">交流过程<p>6步推进法，全面建立孩子的创造力思维系统。</p></h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/chassp02.png" alt="class"/>
            </a>
        </div>
        <div class="p3">
            <h3 class="title">引导原则<p>4个阶段，守护每个孩子本真的艺术天赋。</p></h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/classp03.png" alt="class"/>
            </a>
        </div>
        <div class="p3">
            <h3 class="title">课程主轴<p>发掘生活细节，链接人文知识，归纳艺术概念。</p></h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/classp04.png" alt="class"/>
            </a>
        </div>
        <div class="p4 ta_p2">
            <h3 class="title">课程体系<p>对应各个年龄段的心智基础，螺旋进阶式开展适龄、适合的课程。</p></h3>
            <a href="javascript:;">
                <img src="/imgs/fabletwon/classp05.jpg" alt="class"/>
            </a>
        </div>
    </section>
    <section class="user_brand main_brand">
        <div class="p1">
            <h3 class="title">管理团队</h3>
            <ul class="userBox">
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/yf01.png" alt="杨帆"/>
                        <div class="mark">
                            <h3 class="title">杨帆</h3>
                            <p class="info">总执行助理︱齐天大圣总经办</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/zcp02.png" alt="詹超鹏"/>
                        <div class="mark">
                            <h3 class="title">詹超鹏</h3>
                            <p class="info">经理︱齐天大圣总经办</p>
                        </div>
                    </a>
                </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/zcq03.png" alt="赵春桥"/>
                    <div class="mark">
                        <h3 class="title">赵春桥</h3>
                        <p class="info">总教练︱齐天大圣总经办</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/xme04.png" alt="熊梅娥"/>
                    <div class="mark">
                        <h3 class="title">熊梅娥</h3>
                        <p class="info">客服总监︱齐天大圣总经办</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/tw05.png" alt="陶慰"/>
                    <div class="mark">
                        <h3 class="title">陶慰</h3>
                        <p class="info">教研员︱齐天大圣总经办</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/dl05.png" alt="丁力"/>
                    <div class="mark">
                        <h3 class="title">丁力</h3>
                        <p class="info">区域馆长</p>
                    </div>
                </a>
            </li>   <li class="item">
                <a href="javascript:;">
                    <img src="/imgs/qtds/person01/jsh07.png" alt="贾诗涵"/>
                    <div class="mark">
                        <h3 class="title">贾诗涵</h3>
                        <p class="info">区域馆长</p>
                    </div>
                </a>
            </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/xls08.png" alt="肖烈师"/>
                        <div class="mark">
                            <h3 class="title">肖烈师</h3>
                            <p class="info">区域馆长</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/lx09.png" alt="骆心"/>
                        <div class="mark">
                            <h3 class="title">骆心</h3>
                            <p class="info">区域馆长</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/wjs10.png" alt="万江山"/>
                        <div class="mark">
                            <h3 class="title">万江山</h3>
                            <p class="info">区域馆长</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:;">
                        <img src="/imgs/qtds/person01/yzc11.png" alt="姚志冲"/>
                        <div class="mark">
                            <h3 class="title">姚志冲</h3>
                            <p class="info">区域馆长</p>
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
        <div class="p3">
            <h3 class="title">客服团队</h3>
            <img src="/imgs/qtds/kefu.jpg" alt="客服"/>
        </div>
    </section>
    <section class="joinUs_brand  main_brand">
         <div class="p1">
             <img src="/imgs/fabletwon/p1.jpg" alt="01"/>
         </div>
        <div class="p2">
            <div class="imgbox">
            <img src="/imgs/fabletwon/p3.png" alt="02"/>
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