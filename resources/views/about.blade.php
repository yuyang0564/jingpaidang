@extends('layouts.layout')

@section('title',"关于我们")
@section('title_en',"About us")
@section('default-header')
  @include('layouts._header')
@endsection

{{-- 关于我们 --}}
@section('content')

<main class="about-main w1200">
  <div class="page-header">
    <h1>合肥京拍档网络科技有限公司 <small>公司简介</small></h1>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      <div>
        <p class="p1">
          合肥京拍档网络科技有限公司(简称“京拍档电商”)成立于2018年，由多名电子商务资深人士组建，依
          托丰富的运营服务经验和平台资源，致力于为企业提供优质的电商发展一站式解决方案。
          主营业务是为品牌厂商、代理商提供（京东、淘宝、天猫、唯品会、苏宁易购、蜜芽、贝贝网、亚马逊、
          云集、小红书等）平台入驻、全店代运营、线上推广、品牌策划、软件开发、企业咨询等一站式服务，我们秉
          承“让天下没有难做的电商”的原则，助力企业迎战新零售时代！
        </p>
        <p>我们的 <strong>愿景</strong> ：缔造全球电子商务入驻NO.1</p>
        <h5>
          我们将以诚实守信的操守、共同发展的理念，长远的眼光建立公司的品牌
        </h5>

        <p>我们的 <strong>使命</strong>： 让天下没有难做的电商</p>
        <h5>
          以高品质的服务 | 稳健的技术 | 向用户提供丰富 | 可靠的代运营服务
        </h5>
        <h5>
          持续关注新的电商行业动向 | 积极探索新的用户需求 |
          不断为用户提供创新业务
        </h5>
        <h5>
          为客户提供优秀的网络服务 | 捕捉有效的客户信息 |
          促进商铺利益的快速提高
        </h5>

        <p>我们的 <strong>价值观</strong>： 客户第一，质量为本</p>
      </div>
      <div class="map_area">
        <div id="container"></div>
      </div>
    </div>
  </div>
</main>

@endsection

{{-- 样式 --}}
@section('css')
   @parent
  <link rel="stylesheet" href="/assets/css/about.css" />
@endsection

{{-- js --}}
@section('scripts')
    @parent
    <script src="https://webapi.amap.com/loader.js"></script>
    <script>
      AMapLoader.load({
        key: '6c5f6c107cc4fdd116fb76c62d2d8f6a', //首次调用load必须填写key
        version: '2.0', //JSAPI 版本号
        plugins: ['AMap.Scale'], //同步加载的插件列表
      })
        .then((AMap) => {
              
          let  map = new AMap.Map('container', {
            resizeEnable: true,
            center: [117.307451, 31.878013],
          });
          // 构造点标记
          let marker = new AMap.Marker({
            position: [117.307451, 31.878013],
          });
          map.add(marker);
          map.setFitView();
        let  info = [];
        info.push("<div><div><img style=\"float:left;\" src=\" https://webapi.amap.com/images/autonavi.png \"/></div> ");
        info.push("<div style=\"padding:0px 0px 0px 4px;\"><b>合肥京拍档网络科技有限公司</b>");
        info.push("电话 : 130-2300-8827");
        info.push("地址 :  安徽省合肥市瑶海区中星城</div></div>");
        let infoWindow = new AMap.InfoWindow({
            content: info.join("<br/>")  //使用默认信息窗体框样式，显示信息内容
        });
        infoWindow.open(map, map.getCenter());


        })
        .catch((e) => {
          console.error(e); //加载错误提示
        });
    </script>
@endsection