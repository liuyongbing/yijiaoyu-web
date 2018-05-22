@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('style')
<link rel="stylesheet" href="{{ asset(elixir('css/about.css')) }}{{ $STATIC_VERSION }}" />
@endsection

@section('content')
<article class="main about_main">
    
    @include('include.banner')
    
</article>
@endsection