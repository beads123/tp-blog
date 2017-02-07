<?php
namespace Home\Controller;

/**
 * 博客控制器
 */
class BlogController extends CommonController{

	/**
	 * 显示博客
	 */
	public function index(){
	 
	}

	/**
	 * 前端技术
	 * @return [type] [description]
	 */
	public function front(){
		$this->assign('title','前端技术');
		$this->display('index');
	}

	/**
	 * 后端技术
	 * @return [type] [description]
	 */
	public function back(){
		$this->assign('title','后端技术');
		$this->display('index');
	}

	/**
	 * 发布博客
	 * @return [type] [description]
	 */
	public function fabu(){
	    $this->assign('title','写博客');
		$this->display('fabu');
	}
}

