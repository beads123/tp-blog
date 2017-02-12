<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>书香阁-后台管理</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<!-- ================== BEGIN BASE CSS STYLE ================== -->
		<!--link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /-->
		<link href="/Blog/Public/Admin/plugins/jquery-ui-1.10.4/jquery-ui.css" rel="stylesheet" />
		<link href="/Blog/Public/Admin/plugins/bootstrap-3.1.1/css/bootstrap.css" rel="stylesheet" />
		<link href="/Blog/Public/Admin/plugins/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" />
		<link href="/Blog/Public/Admin/css/animate.css" rel="stylesheet" />
		<link href="/Blog/Public/Admin/css/style.css" rel="stylesheet" />
		<link href="/Blog/Public/Admin/css/style-responsive.css" rel="stylesheet" />
		<!-- ================== END BASE CSS STYLE ================== -->
		<script src="/Blog/Public/Admin/js/behavior.js"></script>
		<script src="/Blog/Public/Admin/js/ga.js"></script>
		<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
		<link href="/Blog/Public/Admin/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
		<link href="/Blog/Public/Admin/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
		<link href="/Blog/Public/Admin/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
		<link href="/Blog/Public/Admin/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
		<!-- ================== END PAGE LEVEL STYLE ================== -->
		<style type="text/css">
			dl dd{padding: 5px;font-family: '微软雅黑';font-size: 16px}
		</style>
	</head>
	<body>
		
		<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade">
	<!-- begin #header -->
	<div id="header" class="header navbar navbar-default navbar-fixed-top">
		<!-- begin container-fluid -->
		<div class="container-fluid">
			<!-- begin mobile sidebar expand / collapse button -->
			<div class="navbar-header">
				<a href="<?php echo U('Index/index');?>" class="navbar-brand"><span class="navbar-logo"></span>Hello,admin</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end mobile sidebar expand / collapse button -->
			
			<!-- begin header navigation right -->
			<ul class="nav navbar-nav navbar-right">
				<li>
					<form class="navbar-form full-width">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="输入关键字" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="/Blog/Public/Admin/img/user-11.jpg" alt="" />
					</a>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end container-fluid -->
	</div>
	<!-- end #header -->
	
	<!-- begin #sidebar -->
	<div id="sidebar" class="sidebar">
		<!-- begin sidebar scrollbar -->
		<div data-scrollbar="true" data-height="100%">
			<!-- begin sidebar user -->
			<ul class="nav">
				<li class="nav-profile">
					<div class="image">
						<a href="javascript:;"><img src="/Blog/Public/Admin/img/user-11.jpg" alt="" /></a>
					</div>
					<div class="info">
						欢迎您,管理员
					</div>
				</li>
			</ul>
			<!-- end sidebar user -->
			
			<!-- begin sidebar nav -->
			<ul class="nav">
				<li class="nav-header">导航</li>
				<li>
					<a href="<?php echo U('Index/index');?>"><i class="fa fa-laptop"></i> <span>首页</span></a>
				</li>
				<li class="has-sub">
					<a href="javascript:;">
						<b class="caret pull-right"></b>
						<i class="fa fa-th"></i>
						<span>数据表</span>
					</a>
					<ul class="sub-menu">
						<li><a href="<?php echo U('Index/user');?>">用户信息</a></li>
						<li><a href="<?php echo U('Index/blog');?>">博客信息</a></li>
						<li><a href="<?php echo U('Index/comment');?>">评论信息</a></li>
					</ul>
				</li>
				<li><a href="<?php echo U('Home/User/logout');?>">
					<i class="fa fa-align-left"></i><span>登出</span></a>
				</li>
			<!-- begin sidebar minify button -->
				<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
				</li>
			<!-- end sidebar minify button -->
			</ul>
			<!-- end sidebar nav -->
		</div>
		<!-- end sidebar scrollbar -->
	</div>
	<!-- end #sidebar -->
</div>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">首页</h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-md-4 col-sm-6">
					<div class="widget widget-state bg-purple">
						<div class="state-icon"><i class="fa fa-desktop"></i></div>
						<div class="state-info">
							<h4>用户总数</h4>
							<p><?php echo ($userCount); ?></p>
						</div>
						<div class="state-link">
							<a href="<?php echo U('Index/user');?>">查看细节 <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-4 col-sm-6">
					<div class="widget widget-state bg-blue">
						<div class="state-icon"><i class="fa fa-chain-broken"></i></div>
						<div class="state-info">
							<h4>博客总数</h4>
							<p><?php echo ($blogCount); ?></p>
						</div>
						<div class="state-link">
							<a href="<?php echo U('Index/blog');?>">查看细节 <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-4 col-sm-6">
					<div class="widget widget-state bg-green">
						<div class="state-icon"><i class="fa fa-users"></i></div>
						<div class="state-info">
							<h4>评论总数</h4>
							<p><?php echo ($commentCount); ?></p>
						</div>
						<div class="state-link">
							<a href="<?php echo U('Index/comment');?>">查看细节 <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
				<div class="col-md-8">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">服务器配置</h4>
						</div>
						<div class="panel-body">
							<dl>
								<dd>服务器主机名称:<?php echo ($_SERVER['SERVER_NAME']); ?></dd>
								<dd>服务器版本:<?php echo phpversion();?></dd>
								<dd>通信协议名称/版本:<?php echo ($_SERVER['SERVER_PROTOCOL']); ?></dd>
								<dd>服务器IP:<?php echo ($_SERVER["SERVER_ADDR"]); ?></dd>
								<dd>客户端IP:<?php echo ($_SERVER["REMOTE_ADDR"]); ?></dd>
								<dd>服务器端口:<?php echo ($_SERVER['SERVER_PORT']); ?></dd>
								<dd>客户端端口:<?php echo ($_SERVER["REMOTE_PORT"]); ?></dd>
								<dd>管理员邮箱:986992484@qq.com</dd>
								<dd>Host头部的内容:<?php echo ($_SERVER['HTTP_HOST']); ?></dd>
								<dd>服务器主目录:<?php echo ($_SERVER["DOCUMENT_ROOT"]); ?></dd>
								<dd>脚本执行的绝对路径:<?php echo ($_SERVER['SCRIPT_FILENAME']); ?></dd>
								<dd>Apache及PHP版本:<?php echo ($_SERVER["SERVER_SOFTWARE"]); ?></dd>
							</dl>
						</div>
					</div>
				</div>
				<!-- end col-8 -->
				<!-- begin col-4 -->
				<div class="col-md-4">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">日历</h4>
						</div>
						<div class="panel-body">
							<div id="datepicker-inline" class="datepicker-full-width"><div></div></div>
						</div>
					</div>
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	<script src="/Blog/Public/Admin/plugins/jquery-1.7.2/jquery-1.7.2.js"></script>
	<script src="/Blog/Public/Admin/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="/Blog/Public/Admin/plugins/bootstrap-3.1.1/js/bootstrap.min.js"></script>
	<script src="/Blog/Public/Admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/Blog/Public/Admin/plugins/flot/jquery.flot.min.js"></script>
	<script src="/Blog/Public/Admin/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="/Blog/Public/Admin/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="/Blog/Public/Admin/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="/Blog/Public/Admin/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="/Blog/Public/Admin/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2-min.js"></script>
	<script src="/Blog/Public/Admin/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/Blog/Public/Admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/Blog/Public/Admin/js/dashboard.js"></script>
	<script src="/Blog/Public/Admin/js/apps.js"></script>
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
</body>
</html>