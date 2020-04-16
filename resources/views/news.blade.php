@extends('layouts.layout')
@section('title',"新闻快报")
@section('title_en',"news")
@section('css')
    @parent
    <link rel="stylesheet" href="/assets/css/news.css">
@endsection
@section('default-header')
    @include('layouts._header')
@endsection
@section('content')

    <section class="news_continer w1200">
        <div class="page-header" style="text-align:center;">
            <h1>新闻快报 <small>新闻、资讯 尽知晓</small></h1>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
              <ul class="news_lists">
                  @foreach ($news as $item)
                  <li class="news_item">
                    <a href="{{route('newInfo',['id' => $item->id])}}">
                        <section class="news_item_img">
                            <img src="{{$item->img}}" alt="新闻">
                        </section>
                        <section class="news_item_new_area">
                            <h2 class="news_item_title">{{$item->title}}</h2>
                            <section class="news_item_content">
                                {{ $item->des }}
                            </section>
                        </section>
                    </a>
                  </li>
                  @endforeach
              </ul>
            </div>
          </div>
    </section>
@endsection

@section('scripts')
    @parent
    <script src="/assets/js/clamp.js"></script>
    <script>
        ;(function(){
            $(document).ready(function(){ 
                $(".news_lists .news_item_content").each(function(i){
                    $clamp($(this)[0],{clamp:4})
                })
            })
        })()
    </script>
@endsection