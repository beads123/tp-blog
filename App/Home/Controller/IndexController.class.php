<?php
namespace Home\Controller;

class IndexController extends CommonController{

	/**
	 * 显示首页
	 */
	public function index(){
		$this->assign('title','书香阁');
		$this->display();
	}

	/**
	 * 当浏览器为ie8以下时，自动跳转到ie提示页面
	 */
	public function ie(){
		$this->assign('title','温馨提示');
		$this->display();
	}

	/**
	 * 关于我们
	 */
	public function about(){
		$this->assign('title','关于我们');
		$this->display();
	}
}

