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
            <li role="presentation" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab"
                    data-sw="swiper1">天猫商城 </a></li>
            <li role="presentation" class="active"><a href="#index" aria-controls="index" role="tab" data-toggle="tab"
                    data-sw="swiper2">京东自营</a></li>
            <li role="presentation"><a href="#index2" aria-controls="index2" role="tab" data-toggle="tab"
                    data-sw="swiper3">京东慧采</a>
            </li>
        </ul>
        {{--  tab 切换 --}}
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="home">
                <section class="swiper_area">
                    <div id="certify">
                        <div class="swiper-container swiper1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="/assets/images/tm/Tmall01.jpg" />
                                   
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/tm/Tmall02.jpg" />
                                   
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/tm/Tmall03.jpg" />
                                    
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/tm/Tmall04.jpg" />
                                    
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/tm/Tmall05.jpg" />
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div role="tabpanel" class="tab-pane active" id="index">
                <section class="swiper_area">
                    <div id="certify">
                        <div class="swiper-container swiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="/assets/images/jd/jd01.jpg" />
                                   
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/jd/jd02.jpg" />
                                    
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/jd/jd03.jpg" />
                                    
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/jd/jd04.jpg" />
                                    
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/jd/jd05.jpg" />
                                   
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


                                <div class="swiper-slide"><img src="/assets/images/jd-ch/jd01.jpg" />
                                   
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/jd-ch/jd02.jpg" />
                                   
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/jd-ch/jd03.jpg" />
                                   
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/jd-ch/jd04.jpg" />
                                   
                                </div>
                                <div class="swiper-slide"><img src="/assets/images/jd-ch/jd05.jpg" />
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="youshi">
            <img src="/assets/img/xiangxi.png" alt="">
        </div>


        {{--  合作伙伴标题 --}}
        <div class="index-advantages-title anli-title" style="text-align: center;">
            <div class="fl">
                <h2>合作伙伴</2>
            </div>
        </div>

        

        <section class="cust_area huoban-lists">
            
            <ul class="index-partners-list clearfix">
                @foreach ($data->huoban as $item)
                    <li><a href=""><img src="{{$item}}"></a></li>
                @endforeach
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
            swPlayer("swiper2")

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
