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
			

<div class="content-block about-content">
    <h2 class="title"><strong>关于异清轩</strong></h2>
    <p class="line-title">想要深入了解<span>异清轩？</span></p>
    <p>异清轩技术博客的   内容大概为网站前端和后端的技术，包括内容管理系统，文章内容有我自己的原创，也有其他网站转载过来的精品，如果我遇到好的资源会第一时间发布在本博客内。</p>
    <p>大家如果有好的文章好的技术请不要吝啬，欢迎前来投稿！</p>
    <p>如果有什么疑问或者需要投稿的请使用下方联系方式，或者留言来告诉我，收到后第一时间回复。</p>
</div>
<div class="content-block contact-content">
    <h2 class="title"><strong>联系异清轩</strong></h2>
    <p><span>站长QQ：</span><a href="tencent://message/?uin=1170461017\">117 046 1017</a></p>
    <p><span>交流群：</span><a href="">36839755</a></p>
    <p><span>站长信箱：</span><a href="mailto:admin@ylsat.com">admin@ylsat.com</a></p>
</div>
<div class="content-block comment">
  <h2 class="title"><strong>添加留言</strong></h2>
  <form action="message.php" method="post" class="form-inline" id="comment-form">
    <div class="comment-title">
      <div class="form-group">
        <label for="messageName">姓名：</label>
        <input type="text" name="messageName" class="form-control" id="messageName" placeholder="异清轩">
      </div>
      <div class="form-group">
        <label for="messageEmail">邮箱：</label>
        <input type="email" name="messageEmail" class="form-control" id="messageEmail" placeholder="admin@ylsat.com">
      </div>
    </div>
    <div class="comment-form">
      <textarea placeholder="在此处填写留言内容" name="messageContent"></textarea>
      <div class="comment-form-footer">
        <div class="comment-form-text">请先 <a href="javascript:;">登录</a> 或 <a href="javascript:;">注册</a>，也可匿名留言 </div>
        <div class="comment-form-btn">
          <button type="submit" class="btn btn-default btn-comment">提交留言</button>
        </div>
      </div>
    </div>
  </form>
  <div class="content-block comment-content">
    <h2 class="title"><strong>最新留言</strong></h2>
    <ul>
      <li><span class="text"><strong>异清轩站长</strong> (2015-10-18) 留言：<br />
      欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
      <li><span class="text"><strong>异清轩编辑</strong> (2015-10-18) 留言：<br />
      欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></li>
      <li><span class="text"><strong>令狐冲</strong> (2015-10-18) 留言：<br />
      欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
      <li><span class="text"><strong>任盈盈</strong> (2015-10-18) 留言：<br />
      欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
      <li><span class="text"><strong>异清轩站长</strong> (2015-10-18) 留言：<br />
      欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></li>
    </ul>
  </div>
</div>
<!--/内容-->
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