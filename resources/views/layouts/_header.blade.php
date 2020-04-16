<section class="layout_header">
    <header class="header w1200">
        <section class="logo">
            <a href="{{route('home')}}">
                <img class="img-circle" src="/assets/img/logo.png" alt="" />
            </a>
        </section>
        <section class="header_list">
            <section class="header_list_area">
                @foreach ($banner as $item)
                <a href="{{route($item['route'])}}" class="{{active_class(if_route($item['route']))}}">{{ $item['name'] }}</a>
                @endforeach
            </section>
            <section class="tell_me_for_mobile">
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2406528572&site=qq&menu=yes">
                    <section class="mobile">
                        24小时服务热线 : <b>130-2300-8827</b>
                    </section>
                </a>
            </section>
        </section>
    </header>
    <section class="pbtxts">
        <p class="ch">
            @yield('title',"")
        </p>
        <p class="en">
            @yield('title_en',"")
        </p>
        <span class="line"></span>
    </section>
</section>
