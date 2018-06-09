<header class="header">
    <a href="{{ env('APP_URL') }}" class="h_logo fl"></a>
    <a href="javascript:;" class="sliderShowBtn fr">三</a>
    <ul class="h_slider fl" id="slider">
        <li class="item ">
            <a href="/">首页<br/>
                Home
            </a>
        </li>
        <li class="item ">
            <a href="{{ route('about.index') }}">关于我们<br/>
                ABOUT US
            </a>
            <!--ul class="itemUl">
                <li class="item"><a href="{{ route('about.index') }}#group_introduction">集团简介</a></li>
                <li class="item"><a href="{{ route('about.index') }}#brand_culture">企业价值观</a></li>
                <li class="item"><a href="{{ route('about.index') }}#brand_list">品牌展示</a></li>
            </ul-->
        </li>
        <li class="item ">
            <a href="{{ route('brand.wukong') }}">
                子品牌<br/>
                BRANCH BRAND
            </a>
            <ul class="itemUl">
                <li class="item"><a href="{{ route('brand.wukong') }}">齐天大圣</a></li>
                <li class="item"><a href="{{ route('brand.pocketcat') }}">口袋猫</a></li>
                <li class="item"><a href="javascript:;">贝乐淘</a></li>
                <li class="item"><a href="javascript:;">悟空邦</a></li>
                <li class="item"><a href="{{ route('brand.town') }}">童画镇</a></li>
                <li class="item"><a href="javascript:;">晓虎队</a></li>
                <li class="item"><a href="javascript:;">学会玩</a></li>
            </ul>
        </li>
        <li class="item ">
            <a href="{{ route('founder.index') }}">创始人<br/>
            FOUNDER
            </a>
            <ul class="itemUl">
                <li class="item"><a href="{{ route('founder.index') }}#chairman">董事长</a></li>
                <li class="item"><a href="{{ route('founder.index') }}#ceo">CEO</a></li>
            </ul>
        </li>
        <li class="item ">
            <a href="{{ route('news.index') }}">资讯中心<br/>
            NEWS
            </a>
        </li>
        <li class="item h_s_enter">
            <a href="{{ env('EDU_URL') }}" target="_blank">教学入口</a>
        </li>
    </ul>
    <span class="h_tel fr">0717-6232880</span>
</header>