;(function(){
    $(function($) {
			$('.carousel').carousel({
			  interval: 5000,
				pause: false
			})
      $('.flexslider').flexslider({
          directionNav: true,
          pauseOnAction: false
      })
      $(".header_list_area a").mouseenter(function(){
      		$(this).addClass("active").siblings().removeClass("active");
      })
			
			var oTop = document.body.scrollTop==0?document.documentElement.scrollTop:document.body.scrollTop
			var header = $(".header")
			function showHeader() {
				if(oTop >= 60) {
					header.addClass("header_animate_show")
				} else {
					header.removeClass("header_animate_show")
				} 
			}
			$(window).scroll(function(event){
			    oTop = $(document).scrollTop()
					showHeader()
			});
			showHeader()
			
			
			// 入驻页面，提交表单
			$('.reset_form').click(function(){
				
			})

			//	回到顶部
			$("#fix-add .gotop").click(function () {
        $('html,body').stop(true, false).animate({scrollTop: '0px'}, 500);
    	});


    })
})()

