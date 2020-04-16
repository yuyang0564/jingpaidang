@extends('layouts.layout')
@section('css')
@parent
<link rel="stylesheet" href="/assets/css/swiper.min.css">
<link rel="stylesheet" href="/assets/css/certify.css">
<link rel="stylesheet" href="/assets/css/cust.css">
@endsection
@section('content')
<section class="anli w1200">
    <section class="inner">
        {{--  客户案例标题 --}}
        <div class="index-advantages-title anli-title" style="text-align: center;">
            <div class="fl">
                <h2>客户案例</2>
            </div>
            <div class="fr">
                <p>电商一站式服务,享受服务的同时教会您高端电商运营技术</p>
            </div>
        </div>

        {{-- tab栏 --}}
        <ul id="tabs" class="nav nav-pills nav-justified" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"
                    data-sw="swiper1">Home</a></li>
            <li role="presentation"><a href="#index" aria-controls="index" role="tab" data-toggle="tab"
                    data-sw="swiper2">Profile</a></li>
            <li role="presentation"><a href="#index2" aria-controls="index2" role="tab" data-toggle="tab"
                    data-sw="swiper3">Messages</a>
            </li>
        </ul>
        {{--  tab 切换 --}}
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <section class="swiper_area">
                    <div id="certify">
                        <div class="swiper-container swiper1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="/assets/images/certify01.png" />
                                    <p>非常难得又值钱的认证证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify02.png" />
                                    <p>深圳市优秀互联网企业认定证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify03.png" />
                                    <p>质量管理体系认证荣誉证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify04.png" />
                                    <p>计算机软件著作权登记证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify05.png" />
                                    <p>增值电信业务经营许可证</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div role="tabpanel" class="tab-pane" id="index">
                <section class="swiper_area">
                    <div id="certify">
                        <div class="swiper-container swiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="/assets/images/certify03.png" />
                                    <p>非常难得又值钱的认证证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify02.png" />
                                    <p>深圳市优秀互联网企业认定证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify01.png" />
                                    <p>质量管理体系认证荣誉证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify04.png" />
                                    <p>计算机软件著作权登记证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify05.png" />
                                    <p>增值电信业务经营许可证</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div role="tabpanel" class="tab-pane" id="index2">
                <section class="swiper_area">
                    <div id="certify">
                        <div class="swiper-container swiper3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="/assets/images/certify05.png" />
                                    <p>非常难得又值钱的认证证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify04.png" />
                                    <p>深圳市优秀互联网企业认定证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify03.png" />
                                    <p>质量管理体系认证荣誉证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify02.png" />
                                    <p>计算机软件著作权登记证书</p>
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/certify01.png" />
                                    <p>增值电信业务经营许可证</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        {{--  合作伙伴标题 --}}
        <div class="index-advantages-title anli-title" style="text-align: center;">
            <div class="fl">
                <h2>合作伙伴</2>
            </div>
        </div>

        <section class="cust_area huoban-lists">
            
            <ul class="index-partners-list clearfix">
                <li><a href=""><img src="../assets/img/huoban/14.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/1.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/2.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/4.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/5.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/6.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/7.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/8.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/9.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/10.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/11.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/12.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/13.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/3.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/15.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/16.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/17.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/18.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/19.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/20.png"></a></li>
                <li><a href=""><img src="../assets/img/huoban/21.png"></a></li>
            </ul>
        </section>
    </section>
</section>
@endsection
@section('title',"客户案例")
@section('title_en',"Customer case")
@section('default-header')
@include('layouts._header')
@endsection
@section('scripts')
@parent
<script src="/assets/js/swiper.min.js"></script>
<script>
    ;
    (function () {
        $(document).ready(function () {


            // 加载完毕时，启动默认的轮播
            swPlayer("swiper1")

            $('#tabs a').on('click', function (e) {
                e.preventDefault()
                var swiperItem = e.currentTarget.dataset.sw
                $(this).tab('show')
                swPlayer(swiperItem)
            })

            function swPlayer(swiperItem) {
                new Swiper("#certify ." + swiperItem, {
                    watchSlidesProgress: true,
                    slidesPerView: 'auto',
                    centeredSlides: true,
                    loop: true,
                    loopedSlides: 5,
                    autoplay: true,
                    on: {
                        progress: function (progress) {
                            for (i = 0; i < this.slides.length; i++) {
                                var slide = this.slides.eq(i);
                                var slideProgress = this.slides[i].progress;
                                modify = 1;
                                if (Math.abs(slideProgress) > 1) {
                                    modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
                                }
                                translate = slideProgress * modify * 260 + 'px';
                                scale = 1 - Math.abs(slideProgress) / 5;
                                zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
                                slide.transform('translateX(' + translate + ') scale(' + scale +
                                    ')');
                                slide.css('zIndex', zIndex);
                                slide.css('opacity', 1);
                                if (Math.abs(slideProgress) > 3) {
                                    slide.css('opacity', 0);
                                }
                            }
                        },
                        setTransition: function (transition) {
                            for (var i = 0; i < this.slides.length; i++) {
                                var slide = this.slides.eq(i)
                                slide.transition(transition);
                            }
                        }
                    }

                })
            }
        })
    })()

</script>
@endsection
