<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo ($title); ?></title>
		<link href="/Blog/Public/Home/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="/Blog/Public/Home/css/style.css" type="text/css" rel="stylesheet">
		<link href="/Blog/Public/Home/css/nprogress.css" type="text/css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="/Blog/Public/Home/js/html5shiv.min.js" type="text/javascript"></script>
		<script src="/Blog/Public/Home/js/respond.min.js" type="text/javascript"></script>
		<script src="/Blog/Public/Home/js/selectivizr-min.js" type="text/javascript"></script>
		<![endif]-->
		<script src="/Blog/Public/Home/js/jquery-2.1.4.min.js" type="text/javascript"></script>
		<link rel="apple-touch-icon-precomposed" href="/Blog/Public/Home/images/icon/icon.png">
		<link rel="shortcut icon" href="/Blog/Public/Home/images/icon/favicon.ico">
		<meta name="Keywords" content="博客" />
		<meta name="description" content="博客" />
		<script type="text/javascript">
			//判断浏览器是否支持HTML5
			window.onload = function() {
				if (!window.applicationCache) {
					window.location.href="<?php echo U('Index/ie');?>";
				}
			}
		</script>
	</head>
	<body>
		<section class="container user-select">
			<header>
				<div class="hidden-xs header"><!--超小屏幕不显示-->
				<h1 class="logo"> <a href="<?php echo U('Index/index');?>" title="异清轩技术博客 - POWERED BY WY ALL RIGHTS RESERVED"></a> </h1>
				<ul class="nav hidden-xs-nav">
					<li class="active"><a href="<?php echo U('Index/index');?>"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
					<li><a href="<?php echo U('Blog/front');?>"><span class="glyphicon glyphicon-erase"></span>前端技术</a></li>
					<li><a href="<?php echo U('Blog/back');?>"><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>
					<li><a href="<?php echo U('Blog/fabu');?>"><span class="glyphicon glyphicon-pencil"></span>写博客</a></li>
					<li><a href="<?php echo U('Index/about');?>"><span class="glyphicon glyphicon-user"></span>关于我们</a></li>
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
					<li class="active"><a href="<?php echo U('Index/index');?>"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
					<li><a href="<?php echo U('Blog/front');?>"><span class="glyphicon glyphicon-erase"></span>前端技术</a></li>
					<li><a href="<?php echo U('Blog/back');?>"><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>
					<li><a href="<?php echo U('Index/about');?>"><span class="glyphicon glyphicon-user"></span>关于我们</a></li>
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
		<div class="item active"> <a href="content.html" target="_blank"><img src="/Blog/Public/Home/images/img1.jpg" alt="" /></a>
		<div class="carousel-caption"> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </div>
		<span class="carousel-bg"></span> </div>
		<div class="item"> <a href="content.html" target="_blank"><img src="/Blog/Public/Home/images/img2.jpg" alt="" /></a>
		<div class="carousel-caption"> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </div>
		<span class="carousel-bg"></span> </div>
		<div class="item"> <a href="content.html" target="_blank"><img src="/Blog/Public/Home/images/img3.jpg" alt="" /></a>
		<div class="carousel-caption"> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </div>
		<span class="carousel-bg"></span> </div>
	</div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> 
	</a> 
</div>
<!--/banner-->
<div class="content-block hot-content hidden-xs">
	<h2 class="title"><strong>本周热门排行</strong></h2>
	<ul>
		<li class="large">
			<a href="content.html" target="_blank">
			<img src="/Blog/Public/Home/images/img3.jpg" alt="">
			<h3> 欢迎来到异清轩技术博客 </h3>
		</a></li>
		<li><a href="content.html" target="_blank"><img src="/Blog/Public/Home/images/logo.jpg" alt="">
			<h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
		</a></li>
		<li><a href="content.html" target="_blank"><img src="/Blog/Public/Home/images/img2.jpg" alt="">
			<h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
		</a></li>
		<li><a href="content.html" target="_blank"><img src="/Blog/Public/Home/images/img1.jpg" alt="">
			<h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
		</a></li>
		<li><a href="content.html" target="_blank"><img src="/Blog/Public/Home/images/logo.jpg" alt="">
			<h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
		</a></li>
	</ul>
</div>
<div class="content-block new-content">
	<h2 class="title"><strong>最新文章</strong></h2>
	<div class="row">
		<div class="news-list">
			<div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="/Blog/Public/Home/images/logo.jpg" alt=""> </a> </div>
			<div class="news-info col-xs-7 col-sm-7 col-md-8">
				<dl>
					<dt> <a href="" target="_blank" > 异清轩技术博客正式上线！ </a> </dt>
					<dd><span class="name"><a href="" title="由 异清轩 发布" rel="author">异清轩</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
					<dd class="text">欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
				</dl>
				<div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">异清轩</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
			</div>
		</div>
		<div class="news-list">
			<div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="/Blog/Public/Home/images/img1.jpg" alt=""> </a> </div>
			<div class="news-info col-xs-7 col-sm-7 col-md-8">
				<dl>
					<dt> <a href="" target="_blank" > 异清轩技术博客正式上线！ </a> </dt>
					<dd><span class="name"><a href="" title="由 异清轩 发布" rel="author">异清轩</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
					<dd class="text">欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
				</dl>
				<div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">异清轩</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
			</div>
		</div>
		<div class="news-list">
			<div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="/Blog/Public/Home/images/img2.jpg" alt=""> </a> </div>
			<div class="news-info col-xs-7 col-sm-7 col-md-8">
				<dl>
					<dt> <a href="" target="_blank" > 异清轩技术博客正式上线！ </a> </dt>
					<dd><span class="name"><a href="" title="由 异清轩 发布" rel="author">异清轩</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
					<dd class="text">欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
				</dl>
				<div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">异清轩</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
			</div>
		</div>
		<div class="news-list">
			<div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="/Blog/Public/Home/images/img3.jpg" alt=""> </a> </div>
			<div class="news-info col-xs-7 col-sm-7 col-md-8">
				<dl>
					<dt> <a href="" target="_blank" > 异清轩技术博客正式上线！ </a> </dt>
					<dd><span class="name"><a href="" title="由 异清轩 发布" rel="author">异清轩</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
					<dd class="text">欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
				</dl>
				<div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">异清轩</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
			</div>
		</div>
		<div class="news-list">
			<div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="/Blog/Public/Home/images/logo.jpg" alt=""> </a> </div>
			<div class="news-info col-xs-7 col-sm-7 col-md-8">
				<dl>
					<dt> <a href="" target="_blank" > 异清轩技术博客正式上线！ </a> </dt>
					<dd><span class="name"><a href="" title="由 异清轩 发布" rel="author">异清轩</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
					<dd class="text">欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
				</dl>
				<div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">异清轩</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
			</div>
		</div>
		<div class="news-list">
			<div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="/Blog/Public/Home/images/logo.jpg" alt=""> </a> </div>
			<div class="news-info col-xs-7 col-sm-7 col-md-8">
				<dl>
					<dt> <a href="" target="_blank" > 异清轩技术博客正式上线！ </a> </dt>
					<dd><span class="name"><a href="" title="由 异清轩 发布" rel="author">异清轩</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
					<dd class="text">欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
				</dl>
				<div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">异清轩</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
			</div>
		</div>
		<div class="news-list">
			<div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href=""><img src="/Blog/Public/Home/images/logo.jpg" alt=""> </a> </div>
			<div class="news-info col-xs-7 col-sm-7 col-md-8">
				<dl>
					<dt> <a href="" target="_blank" > 异清轩技术博客正式上线！ </a> </dt>
					<dd><span class="name"><a href="" title="由 异清轩 发布" rel="author">异清轩</a></span> <span class="identity"></span> <span class="time"> 2015-10-19 </span></dd>
					<dd class="text">欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。</dd>
				</dl>
				<div class="news_bot col-sm-7 col-md-8"> <span class="tags visible-lg visible-md"> <a href="">本站</a> <a href="">异清轩</a> </span> <span class="look"> 共 <strong>2126</strong> 人围观，发现 <strong> 12 </strong> 个不明物体 </span> </div>
			</div>
		</div>
		<div class="news-list">
			<div class="news-img col-xs-5 col-sm-5 col-md-4">
				 <a target="_blank" href="">
				 	<img src="/Blog/Public/Home/images/logo.jpg" alt=""> 
				 </a> 
			</div>
			<div class="news-info col-xs-7 col-sm-7 col-md-8">
				<dl>
					<dt> <a href="" target="_blank" > 异清轩技术博客正式上线！ </a> </dt>
					<dd>
						<span class="name">
							<a href="" title="由 异清轩 发布" rel="author">异清轩</a>
						</span> 
						<span class="identity"></span> 
						<span class="time"> 2015-10-19 </span>
					</dd>
					<dd class="text">欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术，还有CMS内容管理系统，包括但不限于这些还有CMS内容管理系统，包括但不限于这些。
					</dd>
				</dl>
				<div class="news_bot col-sm-7 col-md-8">
					 <span class="tags visible-lg visible-md">
					 	 <a href="">本站</a> 
					 	 <a href="">异清轩</a> 
					 </span> 
					 <span class="look"> 共 
					 	<strong>2126</strong> 人围观，发现 
					 	<strong> 12 </strong> 个不明物体 
					 </span>
				 </div>
			</div>
		</div>
	</div>
	<!--<div class="news-more" id="pagination">
									<a href="">查看更多</a>
	</div>-->
	<div class="quotes" style="margin-top:15px">
		<span class="disabled">首页</span>
		<span class="disabled">上一页</span>
		<span class="current">1</span>
		<a href="">2</a><a href="">下一页</a><a href="">尾页</a>
	</div>
</div>
		</div>
	</div>
	<!--/内容-->
	<aside class="sidebar visible-lg"><!--右侧>992px显示-->
	<div class="sentence"> <strong>每日一句</strong>
		<h2 id="time"></h2>
		<p>你是我人生中唯一的主角，我却只能是你故事中的一晃而过得路人甲。</p>
	</div>
	<div id="search" class="sidebar-block search" role="search">
		<h2 class="title"><strong>搜索</strong></h2>
		<form class="navbar-form" action="search.php" method="post">
			<div class="input-group">
				<input type="text" class="form-control" size="35" placeholder="请输入关键字">
				<span class="input-group-btn">
					<button class="btn btn-default btn-search" type="submit">搜索</button>
				</span> </div>
			</form>
		</div>
		<div class="sidebar-block recommend">
			<h2 class="title"><strong>热门推荐</strong></h2>
			<ul>
				<li><a target="_blank" href=""> <span class="thumb"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
				<li><a target="_blank" href=""> <span class="thumb"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
				<li><a target="_blank" href=""> <span class="thumb"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
				<li><a target="_blank" href=""> <span class="thumb"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
				<li><a target="_blank" href=""> <span class="thumb"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
			</ul>
		</div>
		<div class="sidebar-block comment">
			<h2 class="title"><strong>最新评论</strong></h2>
			<ul>
				<li data-toggle="tooltip" data-placement="top" title="站长的评论"><a target="_blank" href=""><span class="face"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
			欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
			<li data-toggle="tooltip" data-placement="top" title="读者墙上的评论"><a target="_blank" href=""><span class="face"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
		欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
		<li data-toggle="tooltip" data-placement="top" title="异清轩技术博客的SHORTCUT和ICON图标...的评论"><a target="_blank" href=""><span class="face"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
	欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
	<li data-toggle="tooltip" data-placement="top" title="异清轩技术博客的SHORTCUT和ICON图标...的评论"><a target="_blank" href=""><span class="face"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
<li data-toggle="tooltip" data-placement="top" title="异清轩技术博客的SHORTCUT和ICON图标...的评论"><a target="_blank" href=""><span class="face"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
</ul>
</div>
</aside>
<!--/右侧>992px显示-->
<footer class="footer">POWERED BY &copy;<a href="http://www.ylsat.com">异清轩 YLSAT.COM</a> ALL RIGHTS RESERVED &nbsp;&nbsp;&nbsp;<span><a href="http://www.miitbeian.gov.cn/" target="_blank">豫ICP备15026801号-1</a></span> <span style="display:none"><a href="">网站统计</a></span> </footer>
</section>
<div><a href="javascript:;" class="gotop" style="display:none;"></a></div>
<!--/返回顶部-->

<script src="/Blog/Public/Home/js/nprogress.js" type="text/javascript" ></script>
<script src="/Blog/Public/Home/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Blog/Public/Home/js/index.js" type="text/javascript"></script>
</body>
</html>