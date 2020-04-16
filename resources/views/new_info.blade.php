@extends('layouts.layout')
@section('title',"新闻详情")
@section('title_en',"info")
@section('default-header')
@include('layouts._header')
@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="/assets/css/new_info.css">
@endsection
@section('content')

<section class="new_info_continer w1200">
    <section class="info_inner">
        <div class="page-header">
            <h1>{{ $info->title }}</h1>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <p class="text">{{ $info->content }}</p>
            </div>
        </div>
        <div class="back">
        <a type="button" href="{{route("news")}}" class="btn btn-danger btn-lg"><- 返回新闻列表 </a>
        </div>
    </section>
</section> @endsection
