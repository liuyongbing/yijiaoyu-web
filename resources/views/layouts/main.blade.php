<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="x5-orientation" content="portrait">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta name="description" content="翼教育">
    <meta name="keyword" content="翼教育,教育">
    @yield('title')
    <link href="{{ asset(elixir('css/base.css')) }}" rel="stylesheet"/>
    <link href="{{ asset(elixir('css/common.css')) }}" rel="stylesheet"/>
    <link href="{{ asset(elixir('util/swiper/swiper.min.css')) }}" rel="stylesheet"/>
    @yield('style')
</head>
<body>
@include('layouts.header')

@yield('content')

@include('layouts.footer')
</body>

<script src="{{ asset(elixir('util/jquery-3.1.0.min.js')) }}"></script>
<script src="{{ asset(elixir('util/swiper/swiper.min.js')) }}"></script>
<script src="{{ asset(elixir('js/common.js')) }}"></script>

<script src="{{ asset(elixir('js/news.js')) }}"></script>
@yield('script')
</html>