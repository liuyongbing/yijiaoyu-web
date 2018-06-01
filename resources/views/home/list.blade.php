@extends('layouts.main')

@section('title', trans('meta.' . $route . '.title'))

@section('content')
<article class="main">
    
    {!! \App\Helpers\WidgetHelper::banner('home') !!}
    
</article>
@endsection