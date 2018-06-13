@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('content')
<article class="main">
    
    {!! \App\Widgets\Banner::list('home') !!}
    
</article>
@endsection