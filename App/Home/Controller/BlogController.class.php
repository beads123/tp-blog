<?php
namespace Home\Controller;

/**
 * 博客控制器
 */
class BlogController extends CommonController{

	/**
	 * 显示个人博客
	 */
	public function index(){
	 	if($_GET['type']=='front'){
	 		$this->showNavbar('前端技术');
	 	}
	 	elseif($_GET['type']=='back'){
	 		$this->showNavbar('后端技术');
	 	}
	 	else{
	 		$this->showNavbar('个人博客');
	 	}
	}

	/**
	 * 发布博客
	 * @return [type] [description]
	 */
	public function fabu(){
		$this->showNavbar('写博客');
	}
}

