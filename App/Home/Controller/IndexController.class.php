<?php
namespace Home\Controller;

class IndexController extends CommonController{

	/**
	 * 显示首页
	 */
	public function index(){

		//最新博客
		$Recent=D('Blog')->getRecentBlog();

		//最热博客
		$Hot=D('Blog')->getHotBlog();
		
		$this->assign(array(
			'Recent'=>$Recent,
			'Hot'=>$Hot
		));
		$this->showNavbar('书香阁');
	}

	/**
	 * 关于我们
	 */
	public function about(){
		$this->showNavbar('关于我们');
	}

	/**
	 * 当浏览器为ie8以下时，自动跳转到ie提示页面
	 */
	public function ie(){
		$this->showNavbar('温馨提示');
	}

}

