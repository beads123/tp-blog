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
			};
			var BLOG={
				'regUrl':"<?php echo U('User/register');?>",
				'loginUrl':"<?php echo U('User/login');?>",
				'fabuUrl':"<?php echo U('Blog/fabu');?>"
			};
		</script>
	</head>
	<body>
		<section class="container user-select">
			<header>
				<div class="hidden-xs header"><!--超小屏幕不显示-->
				<h1 class="logo"> <a href="<?php echo U('Index/index');?>" title="异清轩技术博客 - POWERED BY WY ALL RIGHTS RESERVED"></a> </h1>
				<ul class="nav hidden-xs-nav">
					<li class="active"><a href="<?php echo U('Index/index');?>"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
					<li><a href="<?php echo U('Blog/index',array('type'=>'front'));?>"><span class="glyphicon glyphicon-erase"></span>前端技术</a></li>
					<li><a href="<?php echo U('Blog/index',array('type'=>'back'));?>"><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>
					<li><a href="<?php echo U('Blog/fabu');?>"><span class="glyphicon glyphicon-pencil"></span>写博客</a></li>
					<li><a href="<?php echo U('Index/about');?>"><span class="glyphicon glyphicon-signal"></span>关于我们</a></li>
					<?php if(!$isLogin): ?><li><a href="javascript:void(0)" class="showModal"><span class="glyphicon glyphicon-random"></span>注册|登陆</a></li>
					<?php else: ?>
					<li><a href="<?php echo U('Blog/personal');?>"><span class="glyphicon glyphicon-user"></span>我的博客</a></li>
					<li><a href="<?php echo U('User/logout');?>"><span class="glyphicon glyphicon-off"></span>退出</a></li><?php endif; ?>
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
					<li><a href="<?php echo U('Blog/index',array('type'=>'front'));?>"><span class="glyphicon glyphicon-erase"></span>前端技术</a></li>
					<li><a href="<?php echo U('Blog/index',array('type'=>'back'));?>"><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>
					<li><a href="<?php echo U('Index/about');?>"><span class="glyphicon glyphicon-user"></span>关于我们</a></li>
					<?php if(!$isLogin): ?><li><a href="javascript:void(0)" class="showModal"><span class="glyphicon glyphicon-random"></span>注册|登陆</a></li>
					<?php else: ?>
					<li><a href="<?php echo U('Blog/personal');?>"><span class="glyphicon glyphicon-user"></span>我的博客</a></li>
					<li><a href="<?php echo U('User/logout');?>"><span class="glyphicon glyphicon-off"></span>退出</a></li><?php endif; ?>
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
		
     <header class="news_header">
        <h2><?php echo ($blogData["title"]); ?></h2>
        <ul>
          <li><?php echo ($blogData["username"]); ?> 发布于 <?= date('Y-m-d',$blogData['time'])?></li>
          <li>类型：<a href="" title="" target="_blank"><?php echo ($blogData["type"]); ?></a></li>
          <li>共 <strong><?php echo ($blogData["see"]); ?></strong> 人围观 </li>
        </ul>
      </header>
      <article class="news_content"><?php echo ($blogData["content"]); ?></article>
      <div class="reprint">转载请说明出处：
      	<a href="" title="" target="_blank">异清轩技术博客</a> » 
      	<a href="" title="" target="_blank">欢迎来到异清轩技术博客</a>
      </div>
      <div class="zambia">
      	<a href="javascript:void(0);" id="zan" blogId="<?php echo ($blogData["id"]); ?>" status="1">
      		<span class="glyphicon glyphicon-thumbs-up"></span>
      		赞(<strong><?php echo ($blogData["zan"]); ?></strong>)	 
      	</a>
      </div>
      <div class="tags news_tags">标签： 
      	<span data-toggle="tooltip" data-placement="bottom" title="查看关于 本站 的文章">
      		<a href="">本站</a></span> 
      	<span data-toggle="tooltip" data-placement="bottom" title="查看关于 异清轩 的文章"><a href="">异清轩</a></span> 
      </div>
      <nav class="page-nav"> 
      	<span class="page-nav-prev">上一篇<br />
        	<a href="" rel="prev">欢迎来到异清轩技术博客</a></span> 
        <span class="page-nav-next">下一篇<br />
        	<a href="" rel="next">欢迎来到异清轩技术博客</a></span> 
      </nav>
      <div class="content-block related-content visible-lg visible-md">
        <h2 class="title"><strong>相关推荐</strong></h2>
        <ul>
          <li><a target="_blank" href=""><img src="/Blog/Public/Home/images/logo.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href=""><img src="/Blog/Public/Home/images/img1.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href=""><img src="/Blog/Public/Home/images/img3.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href=""><img src="/Blog/Public/Home/images/img2.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href=""><img src="/Blog/Public/Home/images/img2.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href=""><img src="/Blog/Public/Home/images/img3.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href=""><img src="/Blog/Public/Home/images/img1.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href=""><img src="/Blog/Public/Home/images/logo.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
        </ul>
      </div>
      <div class="content-block comment">
        <h2 class="title"><strong>评论</strong></h2>
        <form action="comment.php" method="post" class="form-inline" id="comment-form">
          <div class="comment-title">
            <div class="form-group">
              <label for="commentName">昵称：</label>
              <input type="text" name="commentName" class="form-control" id="commentName" placeholder="异清轩">
            </div>
            <div class="form-group">
              <label for="commentEmail">邮箱：</label>
              <input type="email" name="commentEmail" class="form-control" id="commentEmail" placeholder="admin@ylsat.com">
            </div>
          </div>
          <div class="comment-form">
            <textarea placeholder="你的评论可以一针见血" name="commentContent"></textarea>
            <div class="comment-form-footer">
              <div class="comment-form-text">请先 <a href="javascript:;">登录</a> 或 <a href="javascript:;">注册</a>，也可匿名评论 </div>
              <div class="comment-form-btn">
                <button type="submit" class="btn btn-default btn-comment">提交评论</button>
              </div>
            </div>
          </div>
        </form>
        <div class="comment-content">
          <ul>
            <li><span class="face"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
              欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩编辑</strong> (2015-10-18) 说：<br />
              欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text"><strong>令狐冲</strong> (2015-10-18) 说：<br />
              欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text"><strong>任盈盈</strong> (2015-10-18) 说：<br />
              欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="/Blog/Public/Home/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
              欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></li>
          </ul>
        </div>
      </div>
      <script type="text/javascript">
  		(function(){

  			//赞
  			$('#zan').click(function(event) {
  				var blogId=$(this).attr('blogId');   //博客Id
  				var zan=parseInt($(this).find('strong').text()); //得到赞数
  				if($(this).attr('status')==1){
  					$(this).attr('status',0).find('strong').text(zan+1);
  					$.post("<?php echo U('Blog/zan');?>",{"blogId":blogId,"status":1},
  						function(res){
  						console.log(res);
  					});
  				}
  				else{
  					$(this).attr('status',1).find('strong').text(zan-1);
  					$.post("<?php echo U('Blog/zan');?>",{"blogId":blogId,"status":0},
  						function(res){
  						console.log(res);
  					});
  				}	
  			});

        //浏览量加1
        $.post("<?php echo U('Blog/see');?>",{"blogId":$('#zan').attr('blogId')},function(res){
              console.log(res);
        });


  		})();
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