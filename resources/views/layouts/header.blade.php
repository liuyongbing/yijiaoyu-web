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
            <ul class="itemUl">
                <li class="item"><a href="javascript:;">翼教育简介</a></li>
                <li class="item"><a href="javascript:;">齐天大圣简介</a></li>
                <li class="item"><a href="javascript:;">品牌理念</a></li>
                <li class="item"><a href="javascript:;">品牌故事</a></li>
                <li class="item"><a href="javascript:;">发展历程</a></li>
                <li class="item"><a href="javascript:;">荣誉证书</a></li>
                <li class="item"><a href="javascript:;">合作机构</a></li>
            </ul>

        </li>
        <li class="item "><a href="javascript:;">
            课程体系<br/>
            CURRICULUM
        </a>
            <ul class="itemUl">
                <li class="item"><a href="javascript:;">能力篇</a></li>
                <li class="item"><a href="javascript:;">品行VS技术</a></li>
                <li class="item"><a href="javascript:;">营养篇</a></li>
                <li class="item"><a href="javascript:;">全方位教学体系</a></li>
            </ul>
        </li>
        <li class="item "><a href="javascript:;">
            全国校区<br/>
            BRANCH SCHOOLS
        </a></li>
        <li class="item ">
            <a href="{{ route('boss.index') }}">创始人<br/>
            FOUNDER
            </a>
            <ul class="itemUl">
                <li class="item"><a href="{{ route('boss.index') }}#chairman">董事长</a></li>
                <li class="item"><a href="{{ route('boss.index') }}#ceo">CEO</a></li>
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