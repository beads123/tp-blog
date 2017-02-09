<?php
namespace Home\Controller;

class IndexController extends CommonController{

	/**
	 * 显示首页
	 */
	public function index(){
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

