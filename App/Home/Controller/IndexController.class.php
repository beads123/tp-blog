<?php
namespace Home\Controller;

/**
 * 首页控制器
 */
class IndexController extends CommonController{

	/**
	 * 显示首页
	 */
	public function index(){
		//ajax获取最新博客
		if(IS_AJAX){
			$page=intval(I('get.page'));
			$data=D('Blog')->getRecentBlog($page);
			echo json_encode(array(
				'code'=>200,
				'data'=>$data
			));
			return;
		}

		//最新博客,只获取第一页，每页5条
		$Recent=D('Blog')->getRecentBlog(1);

		//本周热门博客
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

