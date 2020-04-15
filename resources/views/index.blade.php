@extends('layouts.layout')

@section('content')
<section class="index-banner w1200">
  <div class="banner_area">
      <div class="flexslider">
        <ul class="slides">
          <li style="background:url('./assets/img/_20200411164201.jpg') 50% no-repeat; background-size: cover; height: 770px; "></li>
          <li style="background:url('./assets/img/8afbf9e3280588da6b17e843290a05fa.jpg') 50% no-repeat; background-size: cover; height: 770px;"></li>
        </ul>
      </div>
    </div>
    <div class="banner_guide">
      <div class="banner_guide_title">
        <section class="title_l">
          <a href="javascript:;">天猫</a>
          <span> | </span>
          <a href="javascript:;">京东</a>
          <span> | </span>
          <a href="javascript:;">苏宁</a>
          <span> | </span>
          <a href="javascript:;">唯品会</a>
          <span> | </span>
        </section>
        <section class="title_r">
          <b>京拍档电商</b>
          <span>已经帮助 <span style="color: #C7254E;">16470</span> 位网店客户成功入驻</span>
        </section>
      </div>

      <div class="form_area">
        <form action="{{route('postCompany')}}" method="POST" id="index-company">
          @csrf
          <div class="banner_guide_form">
            <section class="xdl">
              快速查询下店率
            </section>
            
              <section>
                <input class="text1" type="text" name="c" placeholder="公司名称">
              </section>
              <section>
                <input class="text2" type="text" name="p" placeholder="品牌名称">
              </section>
              <section>
                <input class="text3" type="text" name="usermobile" placeholder="联系方式">
              </section>
            
            <section>
              <input class="sub" type="button" value="立即查询">
            </section>
          </div>
        </form> 
      </div>
      

      <div class="banner_guide_news">
        <i>
          <img src="./assets/img/guide_news_title.png">
        </i>
        <section class="db">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              
              @for ($i = 0; $i < count($arr); $i++)
                  @if ($i == 0)
                    <div class="item active">
                  @else
                    <div class="item ">
                  @endif
                      <section>  
                @foreach ($arr[$i] as $item)
                        <a href="">{{$item}}</a>
                @endforeach
                      </section>
                    </div>
              @endfor

            </div>
          </div>
        </section>
      </div>
      <div class="banner_guide_btns">
        <a class="a1" href="">
          <img src="./assets/img/ico1.png">
          我要咨询
        </a>
        <a class="a2" href="{{ route('ruzhu') }}">
          <img src="./assets/img/ico2.png">
          我要入驻
        </a>
      </div>
    </div>

</section>

<div class="index-service w1200">
  <section class="flg"></section>
  <div class="index-service-title">
    <h2>业务范围</h2>
    <p>电商一站式服务,享受服务的同时教会您高端电商运营技术</p>
  </div>
  <div class="index-service-list">
    <ul>
      <li>
        <div class="number">01</div>
        <div class="text">
          <div class="top">
            <h2>代办入驻</h2>
            <span>Agency Settled</span>
          </div>
          <p>入驻成功再收费，直接对接招商，邀请码入驻，专业入驻顾问24小时全程在线服务，一对一全程跟踪指导，保证高效的入驻成功率。</p>
          <div class="border_top"></div>
          <div class="border_lr"></div>
        </div>
      </li>
      <li>
        <div>
          <div class="number">
            02
          </div>
          <div class="text">
            <div class="top">
              <h2>代运营</h2>
              <span>Agent Operation</span>
            </div>
            <p>专注于电子商务整体托管服务，依靠我们专业的店铺运营团队、美工团队、客服团队为客户创造更大的价值。</p>
            <div class="border_top"></div>
            <div class="border_lr"></div>
          </div>
        </div>
      </li>
      <li>
        <div>
          <div class="number">
            03
          </div>
          <div class="text">
            <div class="top">
              <h2>知识产权</h2>
              <span>intellectual property</span>
            </div>
            <p>知识产权顾问全程专业服务，帮客户解决各类问题，提供45大类全系一手商标，结合企业自身情况综合挑选最佳的商标解决方案。</p>
            <div class="border_top"></div>
            <div class="border_lr"></div>
          </div>
        </div>
      </li>
      <li>
        <div>
          <div class="number">
            04
          </div>
          <div class="text">
            <div class="top">
              <h2>店铺转让</h2>
              <span>Shop transfer</span>
            </div>
            <p>全网一手资源，海量优质店铺，可供客户尽情挑选，一对一的专业服务，全程律师监督，保障客户的权益。</p>
            <div class="border_top"></div>
            <div class="border_lr"></div>
          </div>
        </div>
      </li>
      <li>
        <div>
          <div class="number">
            05
          </div>
          <div class="text">
            <div class="top">
              <h2>占位</h2>
              <span>Shop transfer</span>
            </div>
            <p>占位</p>
            <div class="border_top"></div>
            <div class="border_lr"></div>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="index-service-more">
    <a href="{{route('ruzhu')}}">了解详情</a>
  </div>
</div>

<section class="index-main-continer w1200">
  <section class="flg"></section>

  <div class="index-advantages-title clearfix">
    <div class="fl">
      <h2>我们的优势</2>
    </div>
    <div class="fr">
      <p>一对一服务，入驻无忧，入驻成功再收费</p>
    </div>
  </div>
  
    <div class="panel panel-default">
      <div class="panel-body">
        <ul class="clearfix index-advantages-list">
          <li class="clearfix">
            <a href="">
              <div class="tubiao index-table fl">
                <div class="index-cell">
                  <img src="./assets/img/ico3.png">
                </div>
              </div>
              <div class="text fr">
                <div class="top">
                  <h2><b>更专业</b>/ 5年入驻经验</h2>
                </div>
                <p>「 <strong>京拍档电商</strong> 」是业内天猫、京东、苏宁、唯品会等国内电商平台代入驻成功率较高的的电商代运营企业，全面的入驻指导、专业的电商入驻团队24小时帮助客户解决店铺入驻难题。</p>
              </div>
            </a>
          </li>
          <li class="clearfix">
            <a href="">
              <div class="tubiao index-table fl">
                <div class="index-cell">
                  <img src="./assets/img/ico4.png">
                </div>
              </div>
              <div class="text fr">
                <div class="top">
                  <h2><b>更安心</b>/ 精英技术团队</h2>
                </div>
                <p>专业的品牌策划，私人订制入驻方案，专业入驻顾问一对一在线服务，全程合同签订，不收取任何订金，店铺开通成功以后再收费，只为保障顾客利益，谢绝概率入驻。</p>
              </div>
            </a>
          </li>
          <li class="clearfix">
            <a href="">
              <div class="tubiao index-table fl">
                <div class="index-cell">
                  <img src="./assets/img/ico5.png">
                </div>
              </div>
              <div class="text fr">
                <div class="top">
                  <h2><b>更省心</b>/ 电商平台资质认证 </h2>
                </div>
                <p>天猫、京东、苏宁三大平台官方认证星级服务商，为我们更好的服务客户提供了有力保障，专业的运营团队进行全方位营销支持，为代理商提供更专业的店铺运营服务。</p>
              </div>
            </a>
          </li>
          <li class="clearfix">
            <a href="">
              <div class="tubiao index-table fl">
                <div class="index-cell">
                  <img src="./assets/img/ico6.png">
                </div>
              </div>
              <div class="text fr">
                <div class="top">
                  <h2><b>更完善</b>/ 完善的售后服务体系</h2>
                </div>
                <p>完善的服务团队，每一位顾客都有专业的入驻顾问一对一进行专业的入驻和运营指导，全程在线服务，快速地帮您解决任何入驻问题，致力成为中国领先的电子商务专业服务商，助力每一个电商梦想。</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  
</section>

<section class="youshi w1200">
  <div class="box2" id="ys">
    <div class="box-content">
        <div class="items">
                                                                <div class="item" >
                    <div class="item-box">
                        <div class="icon">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/1.png">
                        </div>
                        <div class="t1">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/left.png" class="left">
                            入驻服务商                                        <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/right.png" class="right">
                        </div>
                        <div class="t2">专业入驻服务商 为您服务</div>
                    </div>
                </div>
                                        <div class="item" >
                    <div class="item-box">
                        <div class="icon">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/2.png">
                        </div>
                        <div class="t1">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/left.png" class="left">
                            VIP绿色通道                                        <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/right.png" class="right">
                        </div>
                        <div class="t2">类目邀请入驻</div>
                    </div>
                </div>
                                        <div class="item" >
                    <div class="item-box">
                        <div class="icon">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/3.png">
                        </div>
                        <div class="t1">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/left.png" class="left">
                            入驻成功率超同行                                        <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/right.png" class="right">
                        </div>
                        <div class="t2"> 入驻成功率达98.8%</div>
                    </div>
                </div>
                                        <div class="item" >
                    <div class="item-box">
                        <div class="icon">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/4.png">
                        </div>
                        <div class="t1">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/left.png" class="left">
                            不成功 不收费                                        <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/right.png" class="right">
                        </div>
                        <div class="t2">免费申请入驻  成功下店再收费</div>
                    </div>
                </div>
                                        <div class="item" >
                    <div class="item-box">
                        <div class="icon">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/5.png">
                        </div>
                        <div class="t1">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/left.png" class="left">
                            多年行业经验                                        <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/right.png" class="right">
                        </div>
                        <div class="t2">多年入驻经验 更专业</div>
                    </div>
                </div>
                                        <div class="item" >
                    <div class="item-box">
                        <div class="icon">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/6.png">
                        </div>
                        <div class="t1">
                            <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/left.png" class="left">
                            特邀入驻机构 实力企业                                        <img src="//assets-public.zhizhouvip.com/zz_dsp/mdx_purple/pc/res/imgs/box2/right.png" class="right">
                        </div>
                        <div class="t2">全类目入驻 类目不受限</div>
                    </div>
                </div>
                                    <div class="clear"></div>
        </div>
    </div>
</div>
</section>

<section class="index-hezuo w1200">
  <div class="index-advantages-title clearfix">
    <div class="fl">
      <h2>合作流程</2>
    </div>
    <div class="fr">
      <p>别让入驻难，阻挠你的电商梦</p>
    </div>
  </div>
  <section >
    <div class="index-service-list">
      <ul>
        <li>
          <div class="number">
            <img src="../assets/img/pic2.png">
          </div>
          <div class="text">
            <div class="top">
              <h2>入驻意向沟通</h2>
            </div>
            <p class="hezuo">
              01 专业顾问一对一服务<br>
              02 沟通入驻意向<br>
              03 制定入驻方案<br>
              04 签订合同<br>
              05 提交审核<br>
            </p>
          </div>
        </li>
        <li>
          <div>
            <div class="number">
              <img src="../assets/img/pic1.png">
            </div>
            <div class="text">
              <div class="top">
                <h2>等待审核</h2>
              </div>
              <p class="hezuo">01 资料收集（加盖公司公章）<br>
                02 提交资料<br>							
              </p>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div class="number">
              <img src="../assets/img/pic3.png">
            </div>
            <div class="text">
              <div class="top">
                <h2>成功入驻</h2>
              </div>
              <p class="hezuo">
                01 品牌评估通过<br>
                02 激活账号<br>
                03 完善店铺信息<br>
                04 支付服务费用（收费标准各有不同）	<br>					
                </p>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div class="number">
              <img src="../assets/img/pic4.png">
            </div>
            <div class="text">
              <div class="top">
                <h2>店铺上线</h2>
              </div>
              <p class="hezuo">
                01 店铺正式上线<br>
                02 商家产品上架	
              </p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
</section>

<section class="huoban w1200">
  <div class="index-advantages-title clearfix">
    <div class="fl">
      <h2>合作伙伴</2>
    </div>
    <div class="fr">
      <p>电商一站式服务,享受服务的同时教会您高端电商运营技术</p>
    </div>
  </div>
  <section class="huoban-lists">
    <ul class="index-partners-list clearfix">
      <li><a href=""><img src="../assets/img/huoban/4ce6448568af1f9f78bd1d82d1fdd4ef.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/4556b939eb9506158e723816133758ce.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/b05776cf25affd89ec6371af30b4e1d3.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/bf56b7de6aabf342d83e851aa7b7064e.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/638e5200c1ba35806a571b315df217cb.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/5e556c3a73e42a386b3b7bfffdcd05f8.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/681e3985dd4365c33f647d011d7a5607.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/1b66e6450862869eb24db03c5416682f.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/55196194e598ac963dbb15493d455cc3.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/4f0d3ba082bb747721d31eecca4d64b3.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/fc5928816b1e285663f793923343a329.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/87913e42e437134f5b16566b222f32e2.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/36bb9b1dcde02a0f13abcfa51252dc2a.png"></a></li>
      <li><a href=""><img src="../assets/img/huoban/d4ce70e084b65969c2af3a63dc08c2a1.png"></a></li>

</ul>
  </section>
</section>

@endsection


@section('scripts')
    @parent
    <script>
      ;(function(){
          $(document).ready(function(){
              var modal = $('#modal')
              var form = $('#index-company')
              var c = $("input[name='c']").val().replace(/\s/g,"")
              var p = $("input[name='p']").val().replace(/\s/g,"")
              var m = $("input[name='usermobile']").val().replace(/\s/g,"")
              var postData = {
                c: c,
                p: p,
                m: m,
              }
              // 公司名
              $("input[name='c']").blur(function(e){
                  postData.c = e.target.value.replace(/\s/g,"")
              })

              // 品牌名
              $("input[name='p']").blur(function(e){
                  postData.p = e.target.value.replace(/\s/g,"")
              })

              // 联系方式
              $("input[name='usermobile']").blur(function(e){
                  postData.m = e.target.value.replace(/\s/g,"")
              })

              $('.sub').click(function(){
                  
                  var mreg = /^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/;
                  if(!mreg.test(postData.m)) {
                    modal.modal()
                    return
                  }
                  form.submit()
                  form[0].reset()
              })

          })
      })()
    </script>
@endsection