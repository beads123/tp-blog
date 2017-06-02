<?php
return array(
	//设置可访问目录
	'MODULE_ALLOW_LIST'=>array('Home','Admin'),

	//设置默认目录
	'DEFAULT_MODULE'=>'Home',

	//数据库配置
	'DB_TYPE'=>'mysqli',
	'DB_HOST'=>'localhost',
	'DB_PORT'=>'3306',
	'DB_USER'=>'root',
	'DB_PWD'=>'',
	'DB_NAME'=>'web',
	'DB_PREFIX'=>'blog_',
	
	//URL模式
	'URL_MODEL'=>2,   //url重写模式

	//修改I函数底层过滤时使用的函数
	'DEFAULT_FILTER' => 'trim,removeXSS',

	/********* MD5复杂化****************/
	'MD5_KEY' => 'blog.lenshen.com',

	/************** 发邮件的配置 ***************/
	'MAIL_ADDRESS' => '986992484@qq.com',   // 发件人的email
	'MAIL_FROM' => '书香阁博客',      // 发货人姓名
	'MAIL_SMTP' => 'smtp.qq.com',      // 邮件服务器的地址
	'MAIL_LOGINNAME' => '986992484@qq.com',   
	'MAIL_PASSWORD' => 'xwopvmkrgoyqbcdf'
);