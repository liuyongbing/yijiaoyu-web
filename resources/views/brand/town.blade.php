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
        @include('brand.include.town_managers')
        @include('brand.include.town_teachers')
        <div class="p3 clear">
            <!--h3 class="title">客服团队</h3>
            <img src="/imgs/qtds/kefu.jpg{{ $STATIC_VERSION }}" alt="客服"/-->
        </div>
    </section>
    @include('brand.include.town_apply')
</article>
@endsection

@section('script')
<script src="{{ asset(elixir('js/brands.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript">
$(function() {
    $('#btn_apply').click(function() {
        
        var brand_id = $('#brand_id').val();
        
        //姓名
        var username = $('#username').val();
        if (!username) {
            alert('请填写姓名');
            return false;
        }
        //手机
        var mobile = $('#mobile').val();
        if (!mobile) {
            alert('请输入手机号');
            return false;
        }
        var rexMobile = /^1[3-9][0-9]\d{8}$/;
        if (!rexMobile.test(mobile)) {
            alert('请输入11位手机号');
            return false;
        }
        //预算
        var budget_range = $('#budget_range').val();
        if (!budget_range) {
            alert('请选择预算');
            return false;
        }
        //省份
        var province = $('#province').val();
        if (!province) {
            alert('请选择省份');
            return false;
        }
        //城市
        var city = $('#city').val();
        if (!city) {
            alert('请选择城市');
            return false;
        }
        //区县
        var area = $('#area').val();
        if (!area) {
            alert('请选择区县');
            return false;
        }
        //街道地址
        var address = $('#address').val();
        if (!address) {
            alert('请填写街道地址');
            return false;
        }
        //内容
        var summary = $('#summary').val();
        if (!summary) {
            alert('请填写内容');
            return false;
        }
        //服务条款
        if(!$('#agreement').is(':checked')) {
            alert('您还尚未同意相关服务条款.');
            return false;
        }
        
        $.ajax({
            method: "POST",
            url: "{{ route('apply.store') }}",
            data: { 
                '_token' : '{{ csrf_token() }}',
                'Apply[brand_id]' : brand_id,
                'Apply[username]' : username,
                'Apply[mobile]' : mobile,
                'Apply[budget_range]' : budget_range,
                'Apply[province]' : province,
                'Apply[city]' : city,
                'Apply[area]' : area,
                'Apply[address]' : address,
                'Apply[summary]' : summary
            },
            dataType: 'json',
            success: function(response) {
                if ('undefinded' != typeof(response.status) && response.status != 'success') {
                    alert(response.message);
                    return false;
                }
                
                alert('留言成功, 非常感谢!');
                $('#btn_apply').attr('disabled', true);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown)
            {
                alert('服务器错误');
            }
        })
    });
});
</script>
@endsection