<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="renderer" content="webkit">
		<meta name="keywords" content="京拍档">
		@section('css')
			<link rel="stylesheet" href="/assets/css/reset.css">
			<link rel="stylesheet" href="/assets/css/bootstarp.css">
			<link rel="stylesheet" href="/assets/css/style.css">
		@show
		<link rel="shortcut icon" href="/f.png" type="image/x-icon">
		<title>京拍档</title>
	</head>
	<body>

		@section('default-header')
			<header class="header w1200" >
				<section class="logo">
						<a href="/">
								<img class="img-circle" src="/assets/img/logo.png" alt="">
						</a>
				</section>
				<section class="header_list">
						<section class="header_list_area">
								<a href="/" class="active">网站首页</a>
								<a href="/about">关于我们</a>
								<a href="/customer">客户案例</a>
								<a href="/contact" >我要入驻</a>
						</section>
						<section class="tell_me_for_mobile">
								<a href="javascript:;">
										<section class="mobile">24小时服务热线 : <b>130-2300-8827</b></section>
								</a>
						</section>
				</section>
			</header>
		@show
		
    @yield('content')
    
    <footer class="index-footer w1200">
        <section class="index-footer-tellme">
            <section class="index-footer-l">
                <p>合肥京拍档网络科技公司</p>
                <p>地址： 安徽省合肥市瑶海区中星城</p>
      <p>电话：130-2300-8827</p>
      <p>企业QQ：2406528572</p>
                <p>邮箱：jingpaidang18@163.com</p>
            </section>
            <section class="index-footer-r">
							<section class="index-footer-r-fav">
								<p>
										<img src="/assets/img/wem.png" alt="">
								</p>
								<p>扫一扫关注我们</p>
							</section>
                <section class="index-footer-r-mobile">
                    <p>统一服务热线</p>
                    <p>
                        <strong class="mobile">130-2300-8827</strong>
                    </p>  
                </section>
            </section>
        </section>
        <section class="index-footer-bottom">
            <p>版权所有：合肥京拍档网络科技公司</p>
        </section>
    </footer>


	{{-- 模态框 --}}
	<div class="modal fade bs-example-modal-sm" id="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-sm" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <h4 class="modal-title">错误信息提示!</h4>
			</div>
			<div class="modal-body">
			  <p>信息不完整，无法提交</p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-block btn-primary" data-dismiss="modal">我知道了</button>
			</div>
		  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->




		@section('scripts')
			<script src="./assets/js/jquery.js"></script>
			<script src="./assets/js/bootstarp.js"></script>
			<script src="assets/js/jquery.flexslider-min.js"></script>
			<script src="./assets/js/base.js"></script>
		@show
	</body>
</html>
