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
		//登陆验证
		if($(this).attr('status')=='login'){
			$(this).text('登陆中...').get(0).disabled=true;
		    var data={
				'username':$('#username').val(),
				'password':$('#password').val(),
			};
			$.post(BLOG.loginUrl,data,function(res){
				var result=$.parseJSON(res);
				if(result.code==200){
					$('#showError').text(result.message).removeClass('alert-warning').addClass('alert-success').show();
					//如果是管理员
					if(result.uid==1){
						window.location.href=BLOG.adminUrl;
						return;
					}
					setTimeout(function(){
						location.reload();
					},1000);				
				}else{
					$('#showError').text(result.message).removeClass('alert-success').addClass('alert-warning').show();
				}
				$('#btn').text('登陆').get(0).disabled=false;
			});

		}else{ 
		    //注册验证
		    $(this).text('注册中...').get(0).disabled=true;
			var data={
				'username':$('#username').val(),
				'password':$('#password').val(),
				'email':$('#email').val()
			};
			$.post(BLOG.regUrl,data,function(res){
			    var result=$.parseJSON(res);
				if(result.code==200){
					$('#showError').text(result.message).removeClass('alert-warning').addClass('alert-success').show();
				}else{
					$('#showError').text(result.message).removeClass('alert-success').addClass('alert-warning').show();
				}
				$('#btn').text('注册').get(0).disabled=false;
			});
		}
	});



});