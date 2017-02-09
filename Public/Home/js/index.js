$(function() {

	//页面加载，页面上方的进度条
	$('body').show();
	$('.version').text(NProgress.version);
	NProgress.start();
	window.onload=function(){
		NProgress.done();
		$('.fade').removeClass('out');
	}

	//时间提示
	function GetTime(){
		var d=new Date();

		this.year=d.getFullYear();
		this.month=(function(d){
			return (d.getMonth()==12)? 1:d.getMonth()+1
		})(d);
		this.date=d.getDate();
		this.weekday=(function(d){
			var day=['星期日','星期一','星期二','星期三','星期四','星期五','星期六'];
			return day[d.getDay()];
		})(d);
	}
	var time=new GetTime();
	$('#time').text(time.year+'年'+time.month+'月'+time.date+'日	'+time.weekday);

	//滚动条的淡入淡出
	$(window).scroll(function() {
		if ($(window).scrollTop() > 100) {
			$(".gotop").fadeIn();
		} else {
			$(".gotop").hide();
		}
	});
	$(".gotop").click(function() {
		$('html,body').animate({
			'scrollTop': 0
		}, 500);
	});

	//提示插件启用
	$('[data-toggle="popover"]').popover();
	$('[data-toggle="tooltip"]').tooltip();

	//鼠标滑过显示 滑离隐藏
	$(".carousel").hover(function() {
		$(this).find(".carousel-control").show();
	}, function() {
		$(this).find(".carousel-control").hide();
	});
	$(".hot-content ul li").hover(function() {
		$(this).find("h3").show();
	}, function() {
		$(this).find("h3").hide();
	});

	//页面元素智能定位
	$.fn.smartFloat = function() {
		var position = function(element) {
			var top = element.position().top; //当前元素对象element距离浏览器上边缘的距离
			var pos = element.css("position"); //当前元素距离页面document顶部的距离
			$(window).scroll(function() { //侦听滚动时
				var scrolls = $(this).scrollTop();
				if (scrolls > top) { //如果滚动到页面超出了当前元素element的相对页面顶部的高度
					if (window.XMLHttpRequest) { //如果不是ie6
						element.css({ //设置css
							position: "fixed", //固定定位,即不再跟随滚动
							top: 0 //距离页面顶部为0
						}).addClass("shadow"); //加上阴影样式.shadow
					} else { //如果是ie6
						element.css({
							top: scrolls //与页面顶部距离
						});
					}
				} else {
					element.css({ //如果当前元素element未滚动到浏览器上边缘，则使用默认样式
						position: pos,
						top: top
					}).removeClass("shadow"); //移除阴影样式.shadow
				}
			});
		};
		return $(this).each(function() {
			position($(this));
		});
	};
	//启用页面元素智能定位
	$("#search").smartFloat();
	
	//异步加载更多内容
	$("#pagination a").on("click", function() {
		var _url = $(this).attr("href");
		var _text = $(this).text();
		$(this).attr("href", "javascript:viod(0);");
		$.ajax({
			type: "POST",
			url: _url,
			success: function(data) {
				//将返回的数据进行处理，挑选出class是news-list的内容块
				result = $(data).find(".row .news-list");
				//newHref获取返回的内容中的下一页的链接地址
				nextHref = $(data).find("#pagination a").attr("href");
				$(this).attr("href", _url);
				if (nextHref != undefined) {
					$("#pagination a").attr("href", nextHref);
				} else {
					$("#pagination a").html("下一页没有了").removeAttr("href")
				}
				// 渐显新内容
				$(function() {
					$(".row").append(result.fadeIn(300));
					$("img").lazyload({
						effect: "fadeIn"
					});
				});
			}
		});
		return false;
	});
	
	//登陆注册
	$('.showModal').click(function(){
		$('#myModal').modal('show');
	});
	//登录注册按钮切换
	$('#change').click(function(){
		if($(this).attr('status')=='login'){
			$(this).text('已有账号?立即登录').attr('status','reg').parent().prev().show();
			$(this).prev('button').attr('status','reg').text('注册');
		}else{
			$(this).text('还没账号?立即注册').attr('status','login').parent().prev().hide();
			$(this).prev('button').attr('status','login').text('登录');	
		}	
	});
	$('#btn').click(function(event) {
		if($(this).attr('status')=='login'){
			alert('登录验证');
		}else{
			alert('注册验证');
		}
	});

});