@extends('layouts.layout')
@section('title',"我要入驻")
@section('title_en',"Online Message")
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
        <small>Online Message </small>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <form id="form" action="{{route('postUser')}}" method="POST">
                @csrf
                <section class="form_area">
                    <div class="input-group username input-group-lg">
                        <span class="input-group-addon" id="basic-addon1">您的姓名</span>
                        <input type="text" name="username" class="form-control" aria-describedby="basic-addon1">
                        <span class="input-group-addon username-require" style="color: red;">* 必填</span>
                    </div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="basic-addon2">您的手机</span>
                        <input type="text" name="usermobile" class="form-control" aria-describedby="basic-addon2">
                        <span class="input-group-addon username-require" style="color: red;">* 必填</span>
                    </div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="basic-addon3">您的 QQ </span>
                        <input type="text" name="qq" class="form-control" aria-describedby="basic-addon3">
                        <span class="input-group-addon username-require" style="color: red;">&nbsp; 可选</span>
                    </div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="basic-addon4">需求类目</span>
                        <input type="text" name="type" class="form-control" aria-describedby="basic-addon4">
                        <span class="input-group-addon username-require" style="color: red;">&nbsp; 可选</span>
                    </div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">商城类型</span>
                        <select class="form-control" name="select">
                            <option value="">其他</option>
                            @for ($i = 0; $i < count($arr); $i++) <option value="{{$arr[$i]}}">{{$arr[$i]}}</option>
                                @endfor
                        </select>
                    </div>

                    {{-- <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon5">简单描述</span>
              <input type="text" class="form-control" aria-describedby="basic-addon5">
            </div> --}}
                    <div class="input-group">
                        <textarea name="des" class="form-control" rows="5" placeholder="详细说明"></textarea>
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
<script>
    ;
    (function () {
        $(document).ready(function () {
            var modal = $('#modal')
            var form = $('#form')
            var usernameVlue = $("input[name='username']").val().replace(/\s/g, "")
            var usermobileVlue = $("input[name='usermobile']").val().replace(/\s/g, "")
            var qqValue = $("input[name='qq']").val().replace(/\s/g, "")
            var typeValue = $("input[name='type']").val().replace(/\s/g, "")
            var selValue = $("select[name='select']").val().replace(/\s/g, "")
            var desValue = $("textarea").val().replace(/\s/g, "")

            var postData = {
                username: usernameVlue,
                usermobile: usermobileVlue,
                qq: qqValue,
                type: typeValue,
                select: selValue,
                des: desValue
            }

            // 用户名
            $("input[name='username']").blur(function (e) {
                postData.username = e.target.value.replace(/\s/g, "")
            })

            // 手机
            $("input[name='usermobile']").blur(function (e) {
                postData.usermobile = e.target.value.replace(/\s/g, "")
            })

            // qq
            $("input[name='qq']").blur(function (e) {
                postData.qq = e.target.value.replace(/\s/g, "")
            })

            // 类目
            $("input[name='qq']").blur(function (e) {
                postData.type = e.target.value.replace(/\s/g, "")
            })

            // 选择
            $("select[name='select']").change(function (e) {
                postData.select = e.target.value.replace(/\s/g, "")
            })

            // 详情
            $("textarea").blur(function (e) {
                postData.des = e.target.value.replace(/\s/g, "")
            })

            // str.replace(/\s/g,"");

            $('.ruzhu').click(function () {

                var namereg = /^[\u4e00-\u9fa5]{2,4}$/;
                if (!namereg.test(postData.username)) {
                    Ply.dialog("alert", "请输入正确的姓名")
                    return
                }
                var mobilereg = /^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/;
                if (!mobilereg.test(postData.usermobile)) {
                    Ply.dialog("alert", "请输入有效的手机号码");
                    return
                }
                form.submit()

                iziToast.show({
                    class: 'test',
                    color: '#fff',
                    icon: 'icon-contacts',
                    message: '发送成功,等该工作人员与您联系',
                    position: 'topCenter',
                    transitionIn: 'flipInX',
                    transitionOut: 'flipOutX',
                    progressBarColor: 'rgb(0, 255, 184)',
                    image: '/assets/img/avatar.jpg',
                    imageWidth: 70,
                    layout: 2,
                    onClose: function () {
                        console.info('onClose');
                    },
                    iconColor: 'rgb(0, 255, 184)'
                });

                

            })
        })

    })()

</script>
@endsection
