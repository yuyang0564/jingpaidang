(function () {
    $(function ($) {

        $(".carousel").carousel({
            interval: 5000,
            pause: false,
		});
		
        $(".flexslider").flexslider({
            directionNav: true,
            pauseOnAction: false,
		});
		
		// 导航按钮
        $(".header_list_area a").mouseenter(function () {
            $(this).addClass("active").siblings().removeClass("active");
        });

		// 获取滚动条的高度
        var oTop =
            document.body.scrollTop == 0
                ? document.documentElement.scrollTop
                : document.body.scrollTop;
		var header = $(".header");
		// 广告
		var ad = $("#consult_service")
		// 广告按钮
		var ad_close = $("#consult_close")
        function showHeader() {
            if (oTop >= 60) {
				header.addClass("header_animate_show");
				ad.fadeIn("slow")
            } else {
				header.removeClass("header_animate_show");
				ad.fadeOut("slow")
            }
		}
		// 点击底部广告按钮,关闭广告
		ad_close.click(function(){
			ad.hide()
		})

		//	滚动监听
        $(window).scroll(function (event) {
            oTop = $(document).scrollTop();
            showHeader();
        });
		showHeader();
		

		// 底部广告 Hover 效果
		// $("#consult_service .service_W").mouseenter(function () {			
        //     $(this).addClass("animated pulse").siblings().removeClass("animated pulse");
        // });

        // 入驻页面，提交表单
        $(".reset_form").click(function () {});

        //	回到顶部
        $("#fix-add .gotop").click(function () {
            $("html,body").stop(true, false).animate({ scrollTop: "0px" }, 500);
        });


        
    });
})();
