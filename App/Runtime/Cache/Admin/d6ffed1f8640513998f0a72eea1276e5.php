<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>书香阁-后台管理</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="/Blog/Public/Admin/plugins/jquery-ui-1.10.4/jquery-ui.css" rel="stylesheet" />
	<link href="/Blog/Public/Admin/plugins/bootstrap-3.1.1/css/bootstrap.css" rel="stylesheet" />
	<link href="/Blog/Public/Admin/plugins/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/Blog/Public/Admin/css/animate.css" rel="stylesheet" />
	<link href="/Blog/Public/Admin/css/style.css" rel="stylesheet" />
	<link href="/Blog/Public/Admin/css/style-responsive.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="/Blog/Public/Admin/plugins/DataTables-1.9.4/css/jQuery.dateTables.css" rel="stylesheet" />
    <script src="/Blog/Public/Admin/plugins/jquery-1.7.2/jquery-1.7.2.js"></script>
	<!-- ================== END PAGE LEVEL STYLE ================== -->
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
				<li><a href="javascript:;">首页</a></li>
				<li><a href="javascript:;">数据表</a></li>
				<li class="active">管理用户信息</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header" style="color:#39f">管理用户信息 <small>页眉内容写在这里...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">用户信息</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered" style="text-align:center">
                                    <thead>
                                        <tr style="background-color:#69c;" >
                                            <th style="text-align:center;width:100px">序号</th>
                                            <th style="text-align:center;">用户名</th>
                                            <th style="text-align:center;">密码</th>
                                            <th style="text-align:center;">邮箱</th>
                                            <th style="text-align:center;">邮箱是否已验证</th>  
                                            <th style="text-align:center;">注册时间</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($userInfo)): $i = 0; $__LIST__ = $userInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
	                                        <td><?php echo ($item["id"]); ?></td>
	                                        <td><?php echo ($item["username"]); ?></td>
	                                        <td><?php echo ($item["password"]); ?></td>
	                                        <td><?php echo ($item["email"]); ?></td>
	                                        <td><?php echo ($item["email_code"]); ?></td>
	                                        <td><?php echo ($item["regtime"]); ?></td>
	                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->	
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/Blog/Public/Admin/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="/Blog/Public/Admin/plugins/bootstrap-3.1.1/js/bootstrap.min.js"></script>
	<script src="/Blog/Public/Admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/Blog/Public/Admin/crossbrowserjs/html5shiv.js"></script>
		<script src="/Blog/Public/Admin/crossbrowserjs/respond.min.js"></script>
		<script src="/Blog/Public/Admin/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<!-- ================== END BASE JS ================== -->
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/Blog/Public/Admin/plugins/DataTables-1.9.4/js/jquery.dataTables.js"></script>
	<script src="/Blog/Public/Admin/plugins/DataTables-1.9.4/js/data-table.js"></script>
	<script src="/Blog/Public/Admin/js/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>	
</body>
</html>