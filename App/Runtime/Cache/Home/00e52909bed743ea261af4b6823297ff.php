<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo ($title); ?></title>
		<link href="/blog/Public/Home/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="/blog/Public/Home/css/style.css" type="text/css" rel="stylesheet">
		<link href="/blog/Public/Home/css/nprogress.css" type="text/css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="/blog/Public/Home/js/html5shiv.min.js" type="text/javascript"></script>
		<script src="/blog/Public/Home/js/respond.min.js" type="text/javascript"></script>
		<script src="/blog/Public/Home/js/selectivizr-min.js" type="text/javascript"></script>
		<![endif]-->
		<script src="/blog/Public/Home/js/jquery-2.1.4.min.js" type="text/javascript"></script>
		<link rel="apple-touch-icon-precomposed" href="/blog/Public/Home/images/icon/icon.png">
		<link rel="shortcut icon" href="/blog/Public/Home/images/icon/favicon.ico">
		<meta name="Keywords" content="博客" />
		<meta name="description" content="博客" />
		<script type="text/javascript">
			//判断浏览器是否支持HTML5
			window.onload = function() {
				if (!window.applicationCache) {
					window.location.href="<?php echo U('Index/ie');?>";
				}
			};
			var BLOG={
				'regUrl':"<?php echo U('User/register');?>",
				'loginUrl':"<?php echo U('User/login');?>",
				'fabuUrl':"<?php echo U('Blog/fabu');?>",
				'editUrl':"<?php echo U('Blog/edit');?>",
				'adminUrl':"<?php echo U('Admin/Index/index');?>"
			};
		</script>
	</head>
	<body>
		<section class="container user-select">
			<header>
				<div class="hidden-xs header"><!--超小屏幕不显示-->
				<h1 class="logo"> <a href="<?php echo U('Index/index');?>" title="书香阁技术博客 - POWERED BY WY ALL RIGHTS RESERVED"></a> </h1>
				<ul class="nav hidden-xs-nav">
					<li class="active"><a href="/blog/index"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
					<li><a href="/blog/front"><span class="glyphicon glyphicon-erase"></span>前端博客</a></li>
					<li><a href="/blog/back"><span class="glyphicon glyphicon-inbox"></span>后端博客</a></li>
					<?php if($isLogin): ?><li><a href="/blog/fabu"><span class="glyphicon glyphicon-pencil"></span>写博客</a></li><?php endif; ?>
					<li><a href="/blog/about"><span class="glyphicon glyphicon-signal"></span>关于我们</a></li>
					<?php if(!$isLogin): ?><li><a href="javascript:void(0)" class="showModal"><span class="glyphicon glyphicon-random"></span>注册|登陆</a></li>
					<?php else: ?>
					<li><a href="/blog/my"><span class="glyphicon glyphicon-user"></span>我的博客</a></li>
					<li><a href="/blog/logout"><span class="glyphicon glyphicon-off"></span>退出</a></li><?php endif; ?>
				</ul>
				<div class="feeds"> <a class="feed feed-xlweibo" href="" target="_blank"><i></i>新浪微博</a> <a class="feed feed-txweibo" href="" target="_blank"><i></i>腾讯微博</a> <a class="feed feed-rss" href="" target="_blank"><i></i>订阅本站</a> <a class="feed feed-weixin" data-toggle="popover" data-trigger="hover" title="微信扫一扫" data-html="true" data-content="<img src='images/weixin.jpg' alt=''>" href="javascript:;" target="_blank"><i></i>关注微信</a> </div>
			</div>
			<!--/超小屏幕不显示-->
			<div class="visible-xs header-xs"><!--超小屏幕可见-->
			<div class="navbar-header header-xs-logo">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-xs-menu" aria-expanded="false" aria-controls="navbar"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
			</div>
			<div id="header-xs-menu" class="navbar-collapse collapse">
				<ul class="nav navbar-nav header-xs-nav">
					<li class="active"><a href="/blog/index"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
					<li><a href="/blog/front"><span class="glyphicon glyphicon-erase"></span>前端博客</a></li>
					<li><a href="/blog/back"><span class="glyphicon glyphicon-inbox"></span>后端博客</a></li>
					<li><a href="/blog/about"><span class="glyphicon glyphicon-user"></span>关于我们</a></li>
					<?php if(!$isLogin): ?><li><a href="javascript:void(0)" class="showModal"><span class="glyphicon glyphicon-random"></span>注册|登陆</a></li>
						<?php else: ?>
						<li><a href="/blog/my"><span class="glyphicon glyphicon-user"></span>我的博客</a></li>
						<li><a href="/blog/logout"><span class="glyphicon glyphicon-off"></span>退出</a></li><?php endif; ?>
				</ul>
				<form class="navbar-form" action="search.php" method="post" style="padding:0 25px;">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="请输入关键字">
						<span class="input-group-btn">
							<button class="btn btn-default btn-search" type="submit">搜索</button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</header>
	<!--/超小屏幕可见-->
	<div class="content-wrap"><!--内容-->
	<div class="content">
		﻿

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!--banner-->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active"> <a href="<?php echo U('Index/index');?>"><img src="/blog/Public/Home/images/header1.jpg" alt="" /></a>
		<div class="carousel-caption"> 欢迎来到书香阁技术博客，在这里可以看到网站前端和后端的技术等 </div>
		<span class="carousel-bg"></span> </div>
		<div class="item"> <a href="<?php echo U('Index/index');?>"><img src="/blog/Public/Home/images/header2.jpg" alt="" /></a>
		<div class="carousel-caption"> 欢迎来到书香阁技术博客，在这里可以看到网站前端和后端的技术等 </div>
		<span class="carousel-bg"></span> </div>
		<div class="item"> <a href="<?php echo U('Index/index');?>"><img src="/blog/Public/Home/images/header3.jpg" alt="" /></a>
		<div class="carousel-caption"> 欢迎来到书香阁技术博客，在这里可以看到网站前端和后端的技术等 </div>
		<span class="carousel-bg"></span> </div>
	</div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> 
	</a> 
</div>
<!--/banner-->
<div class="content-block hot-content hidden-xs">
	<h2 class="title"><strong>本周热门排行</strong></h2>
	<ul>
		<?php if(is_array($Hot)): $i = 0; $__LIST__ = $Hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item1): $mod = ($i % 2 );++$i;?><li class="<?php echo ($key==0?'large':''); ?>">
				<a href="/blog/detail/<?php echo $item1['id'];?>" target="_blank">
					<img src="/blog/Public/Home/images/img<?php echo ($key+1); ?>.jpg" alt="">
					<h3><?php echo ($item1["title"]); ?></h3>
				</a>
		    </li>
		    </li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<div class="content-block new-content">
	<h2 class="title"><strong>最新文章</strong></h2>
	<div class="row" id="RecentBlog">
		<?php if(is_array($Recent)): $i = 0; $__LIST__ = $Recent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="news-list">
				<div class="news-img col-xs-5 col-sm-5 col-md-4"> 
					<a target="_blank" href="/blog/detail/<?php echo $item['id'];?>">
					   <img src="/blog/Public/Home/images/img<?php echo ($key%5+1); ?>.jpg" style="height:140px" alt=""> 
					</a>  
				</div>
				<div class="news-info col-xs-7 col-sm-7 col-md-8">
					<dl>
						<dt> <a href="/blog/detail/<?php echo $item['id'];?>" target="_blank" ><?php echo ($item["title"]); ?></a> </dt>
						<dd>
							<span class="name">
								<a href="" title="由<?php echo ($item["username"]); ?>发布" rel="author">
									<?php echo ($item["username"]); ?></a>
							</span> 
						    <span class="identity"></span> 
							<span class="time"><?php echo ($item['time']); ?></span>
						</dd>
						<dd class="text"><?php echo ($item['content']); ?></dd>
					</dl>
					<div class="news_bot col-sm-7 col-md-8"> 
						<span class="tags visible-lg visible-md">
						 <a href="">本站</a> 
						 <a href="">异清轩</a> 
						</span> 
						<span class="look"> 共 <strong><?php echo ($item["see"]); ?></strong> 人围观，发现 
						</span>
					</div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>

	<div class="news-more" id="pagination">
		<a href="javascript:void(0)" page='2' status='1'>查看更多</a>
	</div>
</div>
<script type="text/javascript">
	//ajax异步获取最新博客
	$("#pagination a").on("click", function() {
		//如果status为0，则表示没有数据了
		if($(this).attr('status')==0)  return;

		$(this).text('正在加载...');
		//页数
		var page=parseInt($(this).attr('page'));
		$(this).attr('page',page+1);

		$.get("<?php echo U('Index/index');?>",{'page':page},function(res){		
			
			var obj=$.parseJSON(res),
				json=obj.data;

			if(json!=null){			
				var html='';
				for (var i = 0; i <json.length; i++) {
					var href="/blog/detail/"+json[i].id;
					html+='<div class="news-list">'+
				'<div class="news-img col-xs-5 col-sm-5 col-md-4">'+ 
			'<a target="_blank" href="'+href+'">'+
					   '<img src="/blog/Public/Home/images/img'+(i%5+1)+'.jpg" '+
					   'style="height:140px" alt="">'+
					'</a></div>'+
				'<div class="news-info col-xs-7 col-sm-7 col-md-8">'+
					'<dl>'+
					  '<dt><a href="'+href+'"'+
					  'target="_blank" >'+json[i].title+'</a> </dt>'+
					  '<dd>'+
							'<span class="name">'+
								'<a href="" title="由'+json[i].username+'发布" rel="author">'+
									json[i].username+'</a>'+
							'</span>'+
						    '<span class="identity"></span>'+
							'<span class="time">'+json[i].time+'</span>'+
						'</dd>'+
						'<dd class="text">'+json[i].content+'</dd>'+
					'</dl>'+
					'<div class="news_bot col-sm-7 col-md-8">'+
						'<span class="tags visible-lg visible-md">'+
						 '<a href="">本站</a>'+
						 '<a href="">异清轩</a>'+
						'</span>'+
						'<span class="look"> 共 <strong>'+json[i].see+
						'</strong> 人围观，发现'+
						'</span>'+
					'</div>'+
				'</div>'+
			'</div>';
				};
				$('#RecentBlog').append(html);
				$('#pagination a').text('查看更多');
			}else{
				//没有数据则标记为0
				$('#pagination a').attr('status','0').text('没有更多了...');
			}
		});	
	});
</script>
	</div>
</div>
<!--/内容-->

<!--模态框-登陆及注册-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-info" id="myModalLabel">欢迎来到书香阁博客</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" style="margin:10px" id="form">
					<div class="form-group">
						<p class="alert alert-warning" style="display:none" id="showError">用户名不合法</p>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input type="text" id="username" class="form-control"
							placeholder="请输入用户名" required minlength="5"
							maxlength="10">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</div>
							<input type="password" id="password" class="form-control" placeholder="请输入密码" required minlength="5" maxlength="20">
						</div>
					</div>
					<div class="form-group" style="display:none">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-send"></span>
							</div>
							<input type="text" id="email" class="form-control" placeholder="请输入邮箱" required>
						</div>
					</div>
					<div class="form-group" style="margin-left:26px">
						<button type="submit" id="btn" status="login" class="btn btn-info">登陆</button>
						<a href="javascript:void(0)" id="change" status="login">还没账号?立即注册</a>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<aside class="sidebar visible-lg"><!--右侧>992px显示-->
<div class="sentence"> <strong>每日一句</strong>
	<h2 id="time"></h2>
	<p>你是我人生中唯一的主角，我却只能是你故事中的一晃而过得路人甲。</p>
</div>
<div id="search" class="sidebar-block search" role="search">
	<h2 class="title"><strong>搜索</strong></h2>
	<form class="navbar-form">
		<div class="input-group">
			<input type="text" class="form-control" size="35" placeholder="请输入关键字">
			<span class="input-group-btn">
				<button class="btn btn-default btn-search" type="submit">搜索</button>
			</span> 
		</div>
	</form>
</div>
	<div class="sidebar-block recommend">
		<h2 class="title"><strong>热门推荐</strong></h2>
		<ul>
			<?php if(is_array($HotBlog)): $i = 0; $__LIST__ = $HotBlog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item1): $mod = ($i % 2 );++$i;?><li>
					<a target="_blank" href="/blog/detail/<?php echo $item1['id'];?>">
					<span class="thumb">
					 	<img src="/blog/Public/Home/images/img<?php echo ($key+1); ?>.jpg" alt="">
					 </span> 
					 <span class="text"><?php echo ($item1["title"]); ?></span> 
					 <span class="text-muted">阅读(<?php echo ($item1["see"]); ?>)</span>
					</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="sidebar-block comment">
		<h2 class="title"><strong>最新评论</strong></h2>
		<ul>
			<?php if(is_array($RecentComment)): $i = 0; $__LIST__ = $RecentComment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item2): $mod = ($i % 2 );++$i;?><li data-toggle="tooltip" data-placement="top">
					<a href="/blog/detail/<?php echo $item2['blog_id'];?>#comment" target="_blank">
						<span class="face">
							<img src="/blog/Public/Home/images/icon/icon.png" alt="">
						</span> 
						<span class="text">
							<strong><?php echo ($item2["username"]); ?></strong> (<?php echo ($item2["time"]); ?>) 说：<br />
								<?php echo ($item2["content"]); ?>
						</span>
					</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
</aside>
<!--/右侧>992px显示-->
<!-- <footer class="footer">POWERED BY &copy;<a href="http://www.ylsat.com">书香阁 lenshen.com </a> ALL RIGHTS RESERVED &nbsp;&nbsp;&nbsp;<span><a href="http://www.lenshen.com/" target="_blank">赣ICP备15026801号</a></span> 
</footer> -->
<footer class="footer">学号：1408093081<a href="http://www.ylsat.com">  姓名：钟林生</a>
   手机号：18296764976 &nbsp;&nbsp;&nbsp;<span><a href="http://www.lenshen.com/" target="_blank">邮箱：986992484@qq.com</a></span> 
</footer>
</section>
<div><a href="javascript:;" class="gotop" style="display:none;"></a></div>
<!--/返回顶部-->
<script src="/blog/Public/Home/js/nprogress.js" type="text/javascript" ></script>
<script src="/blog/Public/Home/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/blog/Public/Home/js/index.js" type="text/javascript"></script>
</body>
</html>