@extends('layouts.layout')
@section('title',"我要入驻")
@section('title_en',"Contact us")
@section('css')
    @parent
    <link rel="stylesheet" href="/assets/css/contact.css">
@endsection

@section('default-header')
    @include('layouts._header')
@endsection

{{-- 内容替换 --}}
@section('content')
<section class="contact-main w1200">
  <div class="page-header">
    <h1>我要入驻</h1>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
        <form id="form">
          <section>
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon1">您的姓名</span>
              <input type="text" class="form-control"  aria-describedby="basic-addon1">
            </div>
            
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon2">您的手机</span>
              <input type="text" class="form-control"  aria-describedby="basic-addon2">
            </div>
  
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon3">您的 QQ </span>
              <input type="text" class="form-control"  aria-describedby="basic-addon3">
            </div>
            
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon4">需求类目</span>
              <input type="text" class="form-control" aria-describedby="basic-addon4">
            </div>

            <div class="input-group input-group-lg">
              <span class="input-group-addon">商城类型</span>
              <select class="form-control">
                @for ($i = 0; $i < count($arr); $i++)
                  <option>{{$arr[$i]}}</option>
                @endfor
              </select>
            </div>

            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon5">简单描述</span>
              <input type="text" class="form-control" aria-describedby="basic-addon5">
            </div>
            
            <div class="input-group btns">
              <button type="button" class="btn ruzhu btn-lg"> 我要入驻 </button>
              <button type="reset" class="btn btn-danger btn-lg "> 重置信息 </button>
            </div>
            

          </section>
        </form>
    </div>
  </div>
</section>
@endsection

@section('scripts')
    @parent
@endsection